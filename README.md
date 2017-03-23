Data Factories
--------------
A data factory helper class for mocking data. This is inspired by Laravel's model factories, the difference being that data factories are not tied to a model. Data factories are great for mocking api responses, requests or other data not persisted to a database. Data Factories are not dependent on Laravel, so you can use this package anywhere.

#### Installing

```
    composer require incraigulous/data-factories
```

#### Registering a data factory

I'm pulling in `fzaninotto/Faker` for this example, but you'll need to require that yourself if you want to use it.

```
use Incraigulous\DataFactories\DataFactory;

$faker = \Faker\Factory::create();

DataFactory::define('contact-form-request', function() use ($faker) {

    $email = $faker->email;

    return [
        'name' => $faker->name,
        'email' => $email,
        'email_confirmation' => $email,
        'phone' => $faker->phoneNumber,
        'message' => $faker->paragraph(),
    ];

});
```

#### Bootstrapping

You can register your factories where your tests are bootstrapped. Like in your `phpunit` `TestCase` `SetUp` method for example. If you put all your factories in separate files in a factories folder, you might do it like this:

```
  protected function setUp() {
     parent::setUp();
  
       foreach (glob(__DIR__.'/factories/*.php') as $filename)
       {
           require $filename;
       }
   }
```

#### Using Factories

You can return a single factory like this:

```
 $person = DataFactory::make('person');
```
or an array of factories like this:

```
 $people = DataFactory::make('person', 10);
```




