# <span style="color: orange">  Laravel instagram

## controller Routing

| Verb      | Path                | Action  | Route Name     |
|-----------|---------------------|---------|----------------|
| GET       | /photo              | index   | photo.index    |
| GET       | /photo/create       | create  | photo.create   |
| POST      | /photo              | store   | photo.store    |
| POST      | /photo/{photo}      | show    | photo.show     |
| POST      | /photo/{photo}      | show    | photo.store    |
| GET       | /photo/{photo}/edit | edit    | photo.edit     |
| PUT/PATCH | /photo/{photo}      | update  | photo.update   |
| DELETE    | /photo/{photo}      | destroy | photo.destroy  |


## Delete all objects in post table
```tinker
    php artisan tinker

    Post::truncate();
    Exit
```


## Author

[Corrbase](https://laravel.com/docs/)



