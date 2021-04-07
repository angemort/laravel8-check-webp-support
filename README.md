# laravel8-check-webp-support
- [Laravel 8](https://laravel.com/docs/8.x/) 
Ajouter une fonction simple qui vérifie si l'USER_AGENT et l'HTTP_ACCEPT sont compatibles avec les images [WebP](https://developers.google.com/speed/webp).

## 1. Télécharger le dossier "Helpers".

Placer le dossier dans le "app" de votre projet.

## 2. Télécharger le fichier "laravelWebpProvider.php".

Placer le fichier dans vos Providers "app\Providers\".

## 3. Modifier le fichier "config\app.php", ajoutez le provider.
```php
'providers' => [
  [...]
  App\Providers\LaravelWebpServiceProvider::class,
],
```
et ajoutez l'Alias :
```php
'aliases' => [
  [...]
  'AnalyWebp' => App\Helpers\Analy\Webp::class,
],
```

## Utilisations

Tester la réponse retournée en ajoutant une route "routes\web.php":
```php
Route::get('/test', function () {
  return dd(AnalyWebp::get_client());
});
```
Quand vous vous rendrez a l'adresse http(s)://nom_de_domaine.fr/test, la fonction vous retournera "True" si votre navigateur est compatible et sinon "False".

Cela vous permet de l'utiliser aussi dans vos fichiers Blade, exemple :
```
@webp
  <img src="/img/exemple.webp"/>
@elsewebp
  <img src="/img/exemple.jpeg"/>
@endwebp
```
