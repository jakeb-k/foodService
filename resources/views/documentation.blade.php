@extends('layouts.master')
@section('title')
    Documentation
@endsection
@section('content')
<h1> <i> Documentation </i> </h1> 
<a href="/FoodService/public"> <p> Restaurants </p> </a> 
    <div id="documentation">
        <br /> 
        <h3> ERD</h3> 
        <img src="{{url('images/FoodServiceAppERD.png')}}" />
        <br /> 
        <div>
        <h3> 1. User Registration </h3> 
        <p> This was done using the laravel breeze scaffold, 
            and with some small tinkering, I updated the user model, migration
            and the auth.login form to allow for role and address input </p> 
        </div> 
        <div>
        <h3> 2. User Login </h3> 
        <p> This was done using the laravel breeze scaffold, 
            and by including the links in the master layout file it 
            allows for the ability to login or logout from any section of the website</p> 
        </div> 
        <div>
        <h3> 3. Restaurant CRUD </h3> 
        <p> This was done by first checking if there was a user logged in with 
            auth, and then checking that users role and name, if the user was a 
            restaurant they would see a link to create a new dish, and once they 
            clicked into the restaurant that matched their name 
            they are able to access the edit form and delete the dishes there. 
            With the edit and create forms there is a validate 
            function that ensures that the specified inputs are in the required state</p> 
        </div> 
        <div>
        <h3> 4. List Detail </h3> 
        <p> This was done using a Restaurant Controller, that on the index simply 
            lists all the restaurants recorded, once the user clicks on that specific
            restaurant the show() function is called which pulls all dishes with 
            that specfic restaurant_id</p>
        </div> 
        <div>
        <h3> 5. Pagination</h3> 
        <p> This was done using the inbuilt pagination feature that Laravel has, 
            for the restaurants it was easy as I could just call the Eloquent model
             and instead of all() use paginate(*), for paginating the dishes was
              more complicated as had to use a whereRaw query on the Eloquent Dish 
              model and then paginate  </p> 
        </div> 
        <div>
        <h3> 6. Single Purchase</h3> 
        <p> Instead of doing single purchase, I went straight to implementation of 
            a cart feature that allowed multiple dishes, more on that later, but 
            once the user selects the purchase option, simply I went to the index 
            function on the order controller and using a foreach just listed the 
            dishes in the cart storage  </p> 
        </div>
        <div>
        <h3> 7. Restaurant Orders</h3> 
        <p>This was done using an Order Controller, and simply would return the
             data based on the current logged in restaurants id and return all 
             orders that had an order with a dish that belonged to that restaurant. 
             As the orders table stored the relevant user data that placed the 
             order it was easy to pull it and list it out. 
             This link to view orders is only availble to be seen by the user if 
             they are a restaurant. </p> 
        </div>
        <div>
        <h3> 8. Input Validation</h3> 
        <p> This was done using a validate function in the dish controller when 
            editing or creating a new dish. If there was an error the error class 
            would be called in the blade file where it would display the error under 
            the specified input where the error was. </p> 
        </div>
        <div>
        <h3> 9. Unique Dish Name</h3> 
        <p> This was quite simple, when a new dish was being made, all the current 
            dishes for that restaurant would be placed in an array. 
            By using the in_array function it would check if that dish name had been
             used and if it had it would return an error, like in requirement 8 
             stating the name needs to be unique</p> 
        </div>
        <div>
        <h3> 10. Unique Dish Name</h3> 
        <p>Not Implemented</p> 
        </div>
        <div>
        <div>
        <h3> 11. Image Upload</h3> 
        <p>Not Implemented</p> 
        </div>
        <h3> 12. Multiple Dishes</h3> 
        <p>This was done by using the session storage laravel feature, to define a 
            cart that had multiple instances of a dish. By creating a unique cart, 
            update, delete and clear functions in the dish controller that are used 
            for the cart, the user can select multiple dishes and view them in the 
            cart page. On purchase it will show the users order with all the 
            information and only allow the ability to select new order which will 
            clear the cart and take them back to the index page</p> 
        </div>
        <div>
        <h3> 13. Promotions</h3> 
        <p>By initialising the dish model with the option to have a promotion it was 
            easy to implement this feature. A restaurant can also update this in the 
            edit form. The promotion value will only show if it is above 0 and is 
            entered as a decimal between 0 and 1</p> 
        </div>
        <div>
        <h3> 14. Admin </h3> 
        <p>Not Implemented</p> 
        </div>
        <div>
        <h3> 15. Favourite Dishes</h3> 
        <p>Not Implemented</p> 
        </div>
        <div>
        <h3> 16. Recomended Dishes</h3> 
        <p>Not Implemented</p> 
        </div>
        <div>
        <h3> Process Comments </h3> 
        <p>I got started by first creating the database, models, migrations 
            and seeders and once that was done set up the index page that shows 
            all the restaurants and went from there. The process I undertook when 
            completing requirements was the same for all them in essence. It would 
            involve first setting up the Route, whether using a Controller or 
            specifying the Route::get() in web.php and doing a dd(); that would 
            simply check if the route was working as intended, once this was done 
            I would then work to get all the data required for that page to be 
            pulled correctly and would test this using the dd() function to see 
            it was doing as I wanted. Once it was returning the data in the desired 
            way I would then simply have the data displayed on the page and then
            add links to main or to a page that was required e.g. edit and delete 
            on the list detail. Once I completed the requirements I completed, 
            I then went about styling the page. Once this was done I rigourosly
            used every feature in every way that was available to check there 
            were no errors and functionality was fully working. </p> 
        </div>
    </div>
@endsection 