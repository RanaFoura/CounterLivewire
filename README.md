# CounterLivewire
## Steps:
Installing Laravel 
1. Create new laravel project. ``` composer create-project laravel/laravel CounterLivewire```
   
Installing Livewire
1. Installing livewire. ``` composer require livewire/livewire ```
2. Create new component. ``` php artisan make:livewire Counter ```
3. Update your code as in the files .

## Reactivity feature (in livewire) 
In the context of Laravel Livewire, reactivity refers to the ability of Livewire components to automatically update the user interface when the underlying data changes, without requiring a full page refresh or explicit JavaScript code.

When a Livewire component is rendered on the page, it keeps track of the data properties used in the Blade template. If any of these properties change due to user interactions or server-side logic, Livewire automatically triggers a re-rendering of the component. During this re-rendering process, the updated data is reflected in the user interface, and the changes are visible to the user without reloading the entire page.

Livewire handles the necessary communication between the client and server behind the scenes. When a user interacts with a Livewire component (e.g., clicks a button, fills out a form), Livewire sends an AJAX request to the server with the updated data. The server processes the request, updates the data on the server-side, and sends back the updated HTML of the component. Livewire then applies the changes to the page without reloading it, creating a smooth and interactive user experience.

Reactivity in Livewire simplifies the process of building dynamic user interfaces, especially for developers who are more comfortable working with PHP and Laravel. It allows you to focus on writing server-side logic and use familiar PHP syntax to handle user interactions and data updates, while Livewire takes care of the client-server communication and UI updates. This makes it easier to build modern, interactive web applications without the need for complex front-end frameworks or extensive JavaScript code.

## Result

![Result](https://github.com/RanaFoura/CounterLivewire/assets/115618347/0c2aeaa3-28f4-45e5-88fe-a8bfb4975669)
