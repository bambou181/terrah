<?php
namespace App\Http\Controllers;
use App\Models\Terrain;
use Illuminate\Http\Request;
class CartController extends Controller
{
public function index(Request $request)
{

$productsInCart = [];
$productsInSession = $request->session()->get("terrains");
if ($productsInSession) {
$productsInCart = Terrain::findMany(array_keys($productsInSession));
//$total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
}
$viewData = [];
$viewData["title"] = "Cart - Online Store";
$viewData["subtitle"] = "Shopping Cart";
$viewData["terrains"] = $productsInCart;
return view('cart.index')->with("viewData", $viewData);
}
public function add(Request $request, $id)
    {
        $terrains = $request->session()->get("terrains", []);
        $terrains[$id] = $request->input('visitDate'); // Assuming quantity is always 1 for each product
        $request->session()->put('terrains', $terrains);

        return redirect()->route('cart.index');
    }
public function delete(Request $request)
{
$request->session()->forget('terrains');
return back();
}
}