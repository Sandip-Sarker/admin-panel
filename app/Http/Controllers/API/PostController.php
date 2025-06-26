<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function store(PostRequest $request)
    {

        try {
            $title = $request->input('title');

            // File Handling
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = 'uploads/new-post/';
                $image->storeAs($imagePath, $imageName, 'public');

            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid or missing image file',
                    'data' => null
                ]);
            }

            // Save to database
            $post = new Post();
            $post->user_id = auth()->user()->id;
            $post->title = $title;
            $post->image  = $imagePath.$imageName;
            $post->save();

            return response()->json([
                'status' => true,
                'message' => 'Post Added Successfully',
                'data' => $post
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong: ' . $e->getMessage(),
                'data' => null
            ], 500);
        }
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'status' => false,
                'message' => 'Post not found',
                'data' => null
            ]);
        }

        $filePath = Storage::disk('public')->path($post->image);

        if (file_exists($filePath)) {

            unlink($filePath);
        }

        $post->delete();

        return response()->json([
            'status' => true,
            'message' => 'Post Deleted Successfully',
            'data' => $post
        ]);
    }


}
