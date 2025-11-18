
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;

Route::get('/', [BookController::class, 'index'])->name('books.list');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/add-to-cart/{book}', [CartController::class, 'add'])->name('cart.add');
Route::get('/remove-from-cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
