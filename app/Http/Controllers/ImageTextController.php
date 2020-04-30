<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Image;

class ImageTextController extends Controller
{
  public function index()
  {
    return view('image');
  }

  public function imagePostcard1()
  {
    $text = date('d M Y');

    $img = Image::make(public_path('images/postcard-1.jpg'));

    $img->text($text, 950, 215, function ($font) {
      $font->file(public_path('fonts/ProximaNovaExCn-Regular.ttf'));
      $font->size(54);
      $font->color('#FF0000');
      $font->align('center');
    });

    $img_path = time() . '-postcard-1.jpg';
    $img->save(public_path('images/' . $img_path));
    return back()->with('img_path', $img_path);
  }

  public function imagePostcard2()
  {
    $text = date('d M Y');
    $img = Image::make(file_get_contents('images/postcard-2.jpg'));
    $img->text($text, 70, 1365, function ($font) {
      $font->file(public_path('fonts/ProximaNovaExCn-Regular.ttf'));
      $font->size(16);
      $font->color('#FF0000');
      $font->align('top');
    });
    $img_path = time() . '-postcard-2.jpg';
    $img->save(public_path('images/' . $img_path));

    return back()->with('img_path2', $img_path);
  }

  public function imagePostcard3()
  {
    $text = date('d M Y');
    $img = Image::make(file_get_contents('images/postcard-3.jpg'));
    $img->text($text, 1540, 460, function ($font) {
      $font->file(public_path('fonts/ProximaNovaExCn-Regular.ttf'));
      $font->size(16);
      $font->color('#FF0000');
      $font->align('right');
    });
    $img_path = time() . '-postcard-3.jpg';
    $img->save(public_path('images/' . $img_path));

    return back()->with('img_path3', $img_path);
  }


  public function addText()
  {
    /* request()->validate([
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time().'.'.request()->image->getClientOriginalExtension();

    request()->image->move(public_path('images'), $imageName);

    return back()
    ->with('success','You have successfully upload image.')
    ->with('image',$imageName);*/

    $img = Image::make(public_path('images/doctor.jpg'));
    $img->text('This is a example ', 120, 100);
    $img->save(public_path('images/doctor.jpg'));
  }
}
