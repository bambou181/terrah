<?php
namespace App\Http\Controllers\Admin;
use App\Models\Terrain;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AdminTerrainController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Terrains - Online Store";
        $viewData["terrains"] = Terrain::all();
        return view('admin.terrain.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        Terrain::validate($request);
        $newProduct = new Terrain();
        $newProduct->setName($request->input('name'));
        $newProduct->setSize($request->input('size'));
        $newProduct->setLocation($request->input('location'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setImage("game.png");
        $newProduct->save();
        if ($request->hasFile('image')) {
            $imageName = $newProduct->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
            $imageName,
            file_get_contents($request->file('image')->getRealPath())
            );
            $newProduct->setImage($imageName);
            $newProduct->save();
        }

        if ($request->hasFile('imgs')) {
            foreach ($request->file('imgs') as $file) {
                
                $imageName = $newProduct->getId() . "_" . time() . "_" . $file->getClientOriginalName();
                Storage::disk('public')->put(
                    $imageName,
                    file_get_contents($file->getRealPath())
                );
                
                
                $existingImages[] = $imageName; // Add the new image to the array
            }
            
            if (!empty($existingImages)) {
                
                $jsonImages = json_encode($existingImages);
        
                // Check if JSON encoding was successful
                if ($jsonImages === false) {
                    echo "Error encoding JSON: " . json_last_error_msg();
                } else {
                    $newProduct->imgs = $jsonImages;
                    $newProduct->update();
                }
            } else {
                echo "The array is empty. No JSON encoding performed.";
            }
            //$jsonImages = json_encode($existingImages);

            //$newProduct->imgs = $jsonImages;
            //$newProduct->setImgs($existingImages);
            //$newProduct->imgs = json_encode($existingImages); // Update the imgs column
            //$newProduct->save();
        }

            
           
            
        return back();
    }

    public function delete($id)
    {
        Terrain::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Terrain - Online Store";
        $viewData["terrain"] = Terrain::findOrFail($id);
        return view('admin.terrain.edit')->with("viewData", $viewData);
    }
    public function update(Request $request, $id)
    {
        
        Terrain::validate($request);
        $product = Terrain::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setLocation($request->input('location'));
        $product->setSize($request->input('size'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));
        if ($request->hasFile('image')) {
        $imageName = $product->getId().".".$request->file('image')->extension();
        Storage::disk('public')->put(
        $imageName,
        file_get_contents($request->file('image')->getRealPath())
        );
        $product->setImage($imageName);
        }
        if ($request->hasFile('imgs')) {
            foreach ($request->file('imgs') as $file) {
                
                $imageName = $product->getId() . "_" . time() . "_" . $file->getClientOriginalName();
                Storage::disk('public')->put(
                    $imageName,
                    file_get_contents($file->getRealPath())
                );
                
                
                $existingImages[] = $imageName; // Add the new image to the array
            }
            
            if (!empty($existingImages)) {
                
                $jsonImages = json_encode($existingImages);
        
                // Check if JSON encoding was successful
                if ($jsonImages === false) {
                    echo "Error encoding JSON: " . json_last_error_msg();
                } else {
                    $product->imgs = $jsonImages;
                }
            } else {
                echo "The array is empty. No JSON encoding performed.";
            }
        }
        $product->save();
        return redirect()->route('admin.terrain.index');
    }



}