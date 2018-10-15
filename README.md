## Installation

### With Composer

```
$ composer require jacek80/bmserver

```

Run migrate when package installed

### Notes

```

Following KISS principle, package is limited to the task must have:

- The only validation is on edit/create product form,
- there's no check if API endpoint is alive
- no authorisation on API calls
- product categories are created in client's Controller (I could add methods on server side instead)

### TODO

- Users auth
- JWTAuth for tokenized calls
- CORS for cross-domain calls
- Controller refactor for more SOLID code
