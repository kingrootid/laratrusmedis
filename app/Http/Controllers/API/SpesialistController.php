<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Spesialist;
use App\Http\Resources\Spesialist as SpecialistResource;

class BlogController extends BaseController
{
    public function index()
    {
        $blogs = Spesialist::all();
        return $this->sendResponse(SpecialistResource::collection($blogs), 'Posts fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }
        $blog = Spesialist::create($input);
        return $this->sendResponse(new SpecialistResource($blog), 'Post created.');
    }

    public function show($id)
    {
        $blog = Spesialist::find($id);
        if (is_null($blog)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new SpecialistResource($blog), 'Post fetched.');
    }

    public function update(Request $request, Blog $blog)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }
        $blog->title = $input['title'];
        $blog->description = $input['description'];
        $blog->save();

        return $this->sendResponse(new SpecialistResource($blog), 'Post updated.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return $this->sendResponse([], 'Post deleted.');
    }
}
