<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class AdminBlogController extends Controller
{
    public function blog()
    {
        $blog = Blog::findOrFail(1);
        return view('admin.modules.blog.edit',compact('blog'));
    }
     
   
    public function update(Request $request)
    {
        $blog = Blog::findOrFail(1);
        $blog->content = $request->content;
        $blog->save();
        

        return redirect()->route('admin.blog.edit')->with(['success' => 'Blog Updated Successfully']);

    }


}
