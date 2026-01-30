<?php
namespace App\Service;
use App\Models\Post;
use Cache;
use App\Events\PostBecamePopular;

class PostService {

    public function __construct(){
        
    }
    public function createPost($data){
        $post = Post::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'user_id' => auth()->id(),
            'is_published' => $data['is_published'] ?? false
        ]);
         // 2. Clear cache
        $this->clearPostCache();
        
        // 3. Return post
        return $post;
    }

     /**
     * Clear post-related cache
     */
    public function clearPostCache()
    {
        Cache::forget('recent_posts');
        Cache::forget('popular_posts');
        // Clear paginated cache
        Cache::forget('posts.page.1');
        Cache::forget('posts.page.2');
        // ... etc
    }
    
    /**
     * Increment post views
     */
    public function incrementViews(Post $post)
    {
        $post->increment('views');
        
        // If views cross 1000, mark as popular
        if ($post->views > 1000 && !$post->is_popular) {
            $post->update(['is_popular' => true]);
            event(new PostBecamePopular($post)); // Event trigger
        }

    }
    /**
     * Get posts with caching
     */
    public function getPosts($limit = 10)
    {
        $cacheKey = 'posts.page.' . request()->get('page', 1);
        
        return Cache::remember($cacheKey, 3600, function() use ($limit) {
            return Post::with('user')
                       ->where('is_published', true)
                       ->latest()
                       ->paginate($limit);
        });
    }
   

    
}