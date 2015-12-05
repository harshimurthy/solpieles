var app = angular.module('APP', [	
	'ngRoute',
	'ngAnimate',
	]);


app

	.constant('API_ROUTE', 'http://localhost/cj27/api/public/api/')
	.config(
		['$routeProvider', 'API_ROUTE', 
		function($routeProvider, API_ROUTE) {

			$routeProvider
				// .when('/', {templateUrl: '../app/views/dashboard.php'})
				// .otherwise({redirectTo: '/'});

		}]
	)
	.config(
		['$httpProvider',
		function($httpProvider) {
			$httpProvider.interceptors.push(
				['$rootScope', '$q', '$location', 
				function($rootScope, $q,  $location){
					return {
			            request: function(config) {
			                // $rootScope.loading = true;
			                return config;
			            },
			            requestError: function(rejection) {
			                // $rootScope.loading = false;
			 
			                return $q.reject(rejection);
			            },
			            response: function(response) {

			                return response;
			            },
						responseError: function(rejection){
							console.log(rejection.data);
							if (rejection.status == 401 || rejection.status == 400) {
								// FlashService.show(rejection.data);	

								$location.path('/logout');

							} 

							if (rejection.status == 500) {
								// FlashService.show(rejection.data);	
							}

							/**
							 * validation errors
							 */
							if (rejection.status == 422) {
								// FlashService.show(rejection.data);								
							}

			                return $q.reject(rejection);
						}
					}
				}
			]);
		}]
	)
	.run(
		['$rootScope', '$location', '$q',
		function($rootScope, $location, $q) {
			/**
			 * General variable used to centrilize the
			 * API route so it need to be changed 
			 * only once.
			 * 
			 * @type {String}
			 */
			$rootScope.settings = {
				titlePage: "Inicio",
				formMethod: "POST",

			}
			// $rootScope.apiRoute = 'http://localhost/agency/api/public/api/';
			// $rootScope.userIsLogged = null;

			/**
			 * This variable store whether or not the user
			 * is logged in the app. It is mainly used
			 * to determine which type of navbar is
			 * served to the user.
			 *
			 * @type {Boolean}
			 */
			// if (AuthService.isAuthenticated()) {
			// 	$rootScope.userIsLogged = true;
			// 	// $rootScope.currentUser = SessionService.get('current_user');
			// 	console.log(SessionService.get('current_user'))
			// 	$rootScope.currentUser = SessionService.get('current_user');
			// } else{
			// 	AuthService.logout();
			// };

			 // console.log(angular.fromJson($rootScope.currentUser))
			
			/**
			 * These routes required the user to be 
			 * logged in order to access them
			 * 
			 * @type {Array}
			 */
			var routesAuth = [ 
				'/profile'
				];
			$rootScope.$on('$routeChangeStart', function(){

				if (routesAuth.indexOf($location.path()) !=-1) { // current rout is secured					
					// if (AuthService.isAuthenticated()) {
					// 	AuthService.logout();
					// 	FlashService.show("You need to be logged in to view this page");
					// 	return $location.path('/login');

					// };
				}
			});
		}]
	);