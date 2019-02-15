window.onload = function(){
    console.log("Beep boop beep");
    // Create Router Constructor

    var view = document.getElementById('view');

    // Grab all active attributes routes

    var activeRoutes = Array.from(document.querySelectorAll('[route]'));

    function navigate(event){
        var route = event.target.attributes[0].value;
        var routeInfo = FirstRoute.routes.filter(function(r){
            return r.path === route;
        })[0];
        if(!routeInfo){
            view.innerHTML = 'No route exits with this path';
            window.history.pushState({}, '', '404');
        }
        else{
            window.history.pushState({}, 'name', routeInfo.path);
            view.innerHTML = 'You have click the ' + routeInfo.name + ' route';
            $.post("/v1/api/route", {router: routeInfo.path},
            function(router){
                view.innerHTML = router.html; 
            }
            , "html");
        }
    }

    // add event listeners

    activeRoutes.forEach(function(route){
        route.addEventListener('click', navigate, false);
    });

    var Router = function(name, routes){
        return {
            name: name,
            routes: routes
        }
    };


    var FirstRoute = new Router('FirstRoute', [

    {
        path: '/',
        name: 'Root'
    },
    {
        path: '/login',
        name: 'Login'
    },
    {
        path: '/recovery',
        name: 'Esqueci senha'
    }

    ]);

    var currentPatch = window.location.pathname;
    if(currentPatch === '/'){
        view.innerHTML = 'You  are root page';
    }
    else{
        var route = FirstRoute.routes.filter(function(r){
            return r.path === currentPatch
        })[0];
        if(route){
            view.innerHTML = 'You are on the ' + route.name + ' path';
        }
        else{
            view.innerHTML = '404!';
        }
    }
}
