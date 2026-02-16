$users = User::where('status','active')
->where(function($query){
    $query->where('age','>',30)
    ->orWhere('verified',true);
})
->get();






latest update laravel 12

$users = User::where('status','active')
->nestedWhere('age','>',30,'or', 'verified', '=' ,true)
->get();