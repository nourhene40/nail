<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VendeurController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\ReclamationController;

use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\HoomeController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('list-admin', function () {
    return view('list-admin');
});
Route::get('ajout-admin', function () {
    return view('ajout-admin');
});
Route::get('ajout-panier', function () {
    return view('ajout-panier');
});
Route::get('list-admin',[AdminController::class,'getAdmin']);


Route::get('modifier-panier', function () {
    return view('modifier-panier');
});
//modifier
Route::get('modifier-panier/{id}',[PanierController::class,'getpanierId']);
Route::post('/modifpanier',[PanierController::class,'updatepanier']);


Route::get('modifier-partenaire/{id}',[PartenaireController::class,'getpartenaireId']);
Route::post('/modifpartenaire',[PartenaireController::class,'updatepartenaire']);
Route::get('modifier-partenaire', function () {
    return view('modifier-partenaire');
});

//modifier
Route::get('modifier-produit-vendeur/{id}',[ProduitController::class,'getproduitvendeurId']);
Route::post('/modifproduitvendeur',[ProduitController::class,'updateproduitvendeur']);
Route::get('modifier-produit-vendeur', function () {
    return view('modifier-produit-vendeur');
});
//fin modifier
Route::get('modifier-equipe/{id}',[EquipeController::class,'getequipeId']);
Route::post('/modifequipe',[EquipeController::class,'updateequipe']);
Route::get('modifier-equipe', function () {
    return view('modifier-equipe');
});





Route::get('modifier-event/{id}',[EventController::class,'geteventId']);
Route::post('/modifevent',[EventController::class,'updateevent']);


Route::get('modifier-admin', function () {
    return view('modifier-admin');
});

Route::get('modifier-admin/{id}',[AdminController::class,'getAdminId']);
Route::post('/modifAdmin',[AdminController::class,'updateAdmin']);
//Route::get('list-client', function () {
    //return view('list-client');
//});

Route::get('list-client',[ClientController::class,'getClient']);


//Route::get('list-panier', function () {
    //return view('list-panier');
//});
Route::get('list-panier',[PanierController::class,'getPanier']);


Route::get('ajout-client', function () {
    return view('ajout-client');
});
Route::get('modifier-client', function () {
    return view('modifier-client');
});
Route::get('modifier-client/{id}',[ClientController::class,'getClientId']);
Route::post('/modifClient',[ClientController::class,'modifClient']);
Route::get('dashvendeurp', function () {
    return view('dashvendeurp');
});

//Route::get('list-vendeur', function () {
    //return view('list-vendeur');
///});

Route::get('list-vendeur',[VendeurController::class,'getVendeur'])->name('list-vendeur');;

Route::get('ajout-vendeur', function () {
    return view('ajout-vendeur');
});

Route::get('modifier-vendeur', function () {
    return view('modifier-vendeur');
});
Route::get('modifier-vendeur/{id}',[VendeurController::class,'getvendeurId']);
Route::post('/modifvendeur',[VendeurController::class,'updatevendeur']);



//Route::get('list-produit', function () {
    //return view('list-produit');
//});


//list
Route::get('list-produit',[ProduitController::class,'getProduit']);
Route::get('list-commande',[CommandeController::class,'getCommande']);
Route::get('list-equipe',[EquipeController::class,'getequipe']);

Route::get('list-produit-vendeur',[ProduitController::class,'getProduitvendeur']);
Route::get('list-event',[EventController::class,'getEvent']);
Route::get('ajout-produit', function () {
    return view('ajout-produit');
});


Route::get('modifier-produit/{id}',[ProduitController::class,'getproduitId']);
Route::post('/modifproduit',[ProduitController::class,'updateproduit']);

//Route::get('list-categorie', function () {
    //return view('list-categorie');
//});



//list
Route::get('list-categorie',[CategorieController::class,'getCategorie']);
Route::get('list-partenaire',[PartenaireController::class,'getPartenaire']);


Route::get('list-contact-us',[ContactController::class,'getContact']);
Route::get('list-feedback',[feedbackController::class,'getfeedback']);
Route::get('list-reclamation',[ReclamationController::class,'getreclamation']);
Route::get('ajout-categorie', function () {
    return view('ajout-categorie');
});
Route::get('modifier-categorie', function () {
    return view('modifier-categorie');
});

Route::get('modifier-categorie/{id}',[CategorieController::class,'getcategorieId']);
Route::post('/modifcategorie',[CategorieController::class,'updatecategorie']);


Route::get('theme', function () {
    return view('theme');
});
Route::get('theeme', function () {
    return view('theeme');
});
Route::get('themetrois', function () {
    return view('themetrois');
});

Route::get('dashvendeurajoutp', function () {
    return view('dashvendeurajoutp');
});
Route::get('dashvendeurmodifierp', function () {
    return view('dashvendeurmodifierp');
});
Route::get('loginadmin', function () {
    return view('loginadmin');
});
Route::get('contactvendeur', function () {
    return view('contactvendeur');
});
Route::get('feedbackvendeur', function () {
    return view('feedbackvendeur');
});
Route::get('ajout-produit-vendeur', function () {
    return view('ajout-produit-vendeur');
}
);
Route::get('ajout-equipe', function () {
    return view('ajout-equipe');
}
);
Route::get('ajout-partenaire', function () {
    return view('ajout-partenaire');
}

);

Route::get('formulairevendeur', function () {
    return view('formulairevendeur');
}

);

//ajoutajout
Route::post('addadmin',[AdminController::class,'ajoutadmin']);
Route::post('addpartenaire',[PartenaireController::class,'ajoutpartenaire']);
Route::post('addequipe',[EquipeController::class,'ajoutequipe']);
Route::post('addcategorie',[CategorieController::class,'ajoutcategorie']);
Route::post('addclient',[ClientController::class,'ajoutclient']);
Route::post('addpanier',[PanierController::class,'ajoutpanier']);
Route::post('addproduit',[ProduitController::class,'ajoutproduit']);
Route::post('addvendeur',[VendeurController::class,'ajoutvendeur']);
Route::post('/addcommande',[CommandeController::class,'ajoutcommande']);
Route::post('/addcontact',[ContactController::class,'ajoutcontact']);
Route::post('/addfeedback',[feedbackController::class,'ajoutfeedback']);
Route::post('/addreclamation',[ReclamationController::class,'ajoutreclamation']);
Route::post('/addproduitvendeur',[ProduitController::class,'ajoutproduitvendeur']);

//delete
Route::get('suppadmin/{id}',[AdminController::class,'deleteadmin']);
Route::get('suppequipe/{id}',[EquipeController::class,'deleteequipe']);
Route::get('suppartenaire/{id}',[PartenaireController::class,'deletepartenaire']);
Route::get('suppcategorie/{id}',[CategorieController::class,'deletecategorie']);

Route::get('suppclient/{id}',[ClientController::class,'deleteclient']);
Route::get('supppanier/{id}',[PanierController::class,'deletepanier']);
Route::get('supproduit/{id}',[ProduitController::class,'deleteproduit']);
Route::get('supproduitvendeur/{id}',[ProduitController::class,'deleteproduitvendeur']);
Route::get('supvendeur/{id}',[VendeurController::class,'deletevendeur']);
Route::get('supcommande/{id}',[CommandeController::class,'deletcommande']);
Route::get('supcontact/{id}',[ContactController::class,'deletecontact']);
Route::get('supcontact/{id}',[ContactController::class,'deletecontactv']);
Route::get('supreclamation/{id}',[ReclamationController::class,'deletereclamation']);
Route::get('supreclamation/{id}',[ReclamationController::class,'deletereclamationvendeur']);
Route::get('supfeedback/{id}',[feedbackController::class,'deletefeedback']);
Route::get('supfeedback/{id}',[feedbackController::class,'deletefeedbackvendeur']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('aboutus', function () {
    return view('aboutus');
});


Route::get('registeer', function () {
    return view('registeer');
});
Route::get('contact-us', function () {
    return view('contact-us');
});

Route::get('feedback', function () {
    return view('feedback');
});

Route::get('reclamation', function () {
    return view('reclamation');
});



Route::get('registertheme', function () {
    return view('registertheme');
});

Route::get('blog', function () {
    return view('blog');
});
Route::get('facture', function () {
    return view('facture');
});

Route::get('faq', function () {
    return view('faq');
});
Route::get('pdf', function () {
    return view('pdf');
});
Route::get('reclamationvendeur', function () {
    return view('reclamationvendeur');
});
Route::get('error', function () {
    return view('error');
});
Route::get('coming-soon', function () {
    return view('coming-soon');
});
Route::get('become-a-vendor', function () {
    return view('become-a-vendor');
});
Route::get('my-account', function () {
    return view('my-account');
});
Route::get('tarak', function () {
    return view('tarak');
});
Route::get('testf', function () {
    return view('testf');
});
Route::get('wishlist', function () {
    return view('wishlist');
});
Route::get('feedbackvendeur', function () {
    return view('feedbackvendeur');
});
Route::get('compare', [ProduitController::class, 'compare']);
/*Route::get('cart', function () {
    return view('cart');
});*/
Route::get('checkout', function () {
    return view('checkout');
});
Route::get('post-single', function () {
    return view('post-single');
});
Route::get('partenaire', function () {
    return view('partenaire');
});

Route::get('cc', function () {
    return view('cc');
});

//Route::get('home', function () {
    //return view('home');
//});
   


//lire a partir de base de donnee
Route::get('/',[CategorieController::class,'getcategoriefront']);

Route::get('order', function () {
    return view('order');
});

Route::get('reclamation',[VendeurController::class,'getreclamationvendeur']);

Route::get('reclamationvendeur',[ReclamationController::class,'getreclamationvendeurfront']);
Route::get('contactvendeur',[ContactController::class,'getcontactvendeurfront']);

Route::get('feedbackvendeur',[feedbackController::class,'getfeedbackvendeurfront']);


Route::get('partenaire',[PartenaireController::class,'getpartenairefront']);
Route::get('store',[VendeurController::class,'getVendeurfront']);
Route::get('detailMessage/{id}',[ContactController::class,'getmessage']);
Route::get('chaqueevendeur',[ProduitController::class,'getproduitfront']);

Route::get('allcategories',[CategorieController::class,'getcategorieesfront']);

Route::get('dashvendeurp',[ProduitController::class,'getproduitvendeurfront']);

Route::get('theeme',[CategorieController::class,'getcategoriethemefront']);


Route::get('cart', [PanierController::class, 'cartList'])->name('cart.list');
//Route::get('checkout', [PanierController::class, 'order'])->name('cart.list');
Route::post('cart', [PanierController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [PanierController::class, 'updateCart'])->name('cart.update');
Route::post('clear', [PanierController::class, 'clearAllCart'])->name('cart.clear');
Route::post('remove', [PanierController::class, 'removeCart'])->name('cart.remove');
//Route::get('allcategories', function () {
    //return view('allcategories');
//});



//recherce

Route::get('/search', [VendeurController::class, 'search']);
Route::get('/searchc', [ClientController::class, 'searchc']);
Route::get('/searchcommande', [CommandeController::class, 'searchcommande']);
Route::get('/searche', [EquipeController::class, 'searche']);
Route::get('/searchp', [ProduitController::class, 'searchp']);
Route::get('/searchca', [CategorieController::class, 'searchca']);
Route::get('/searchad', [AdminController::class, 'searchad']);
Route::get('/searchcr', [ReclamationController::class, 'searchcr']);
Route::get('/searchcf', [feedbackController::class, 'searchcf']);
Route::get('/searchcon', [ContactController::class, 'searchcon']);
Route::post('/search2', [VendeurController::class, 'search2']);
Route::post('/searchproduit', [ProduitController::class, 'searchproduit']);
Route::post('/searchproduitv', [ProduitController::class, 'searchproduitv']);

Route::post('/searchcp', [ProduitController::class, 'searchcp']);



Route::get('ajout-produit-vendeur',[CategorieController::class,'getcategorieajoutv']);
Route::get('ajout-produit',[CategorieController::class,'getccategorie']);
Route::get('modifier-produitc',[CategorieController::class,'getcategoriemodifier']);



Route::get('/qrcode', [QrCodeController::class, 'index']);



//pdf a imprimer
Route::get('imprimervendeur',[VendeurController::class,'getVendeurpdf']);
Route::get('imprimercommande',[CommandeController::class,'getcommandepdf']);
Route::get('imprimerclient',[ClientController::class,'getclientpdf']);
Route::get('imprimerpartenaire',[PartenaireController::class,'getpartenairepdf']);
Route::get('imprimerequipe',[EquipeController::class,'getequipepdf']);
Route::get('imprimerproduit',[ProduitController::class,'getproduitpdf']);
Route::get('imprimercontact',[ContactController::class,'getcontactpdf']);
Route::get('imprimerfeedback',[feedbackController::class,'getfeedbackpdf']);
Route::get('imprimerreclamation',[ReclamationController::class,'getreclamationpdf']);


Auth::routes();

/*Route::get('/',[CategorieController::class,'getcategoriefrontt']);*/
Route::get('/searchcategorie', [CategorieController::class, 'searchcategorie']);

Route::get('index', [HoomeController::class, 'getreserverr']);

Route::get('detailMessage/{id}', [ContactController::class, 'detailMessage']);



//payment
Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
//reclamation
Route::get('/bloquervendeur/{id}', [VendeurController::class, 'bloque']);
Route::get('/activervendeur/{id}', [VendeurController::class, 'active']);

// Compare feature

Route::get('/compare/{id}', [ProduitController::class, 'AddToCompare']);
