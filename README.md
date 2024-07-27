# PHP Constants: `const` vs `define()`

In PHP, there are two primary ways to declare constants: using the `const` keyword and the `define()` function. Each method has its own use cases and characteristics. This guide explains the crucial differences between these two methods.

## Key Differences

### 1. Compile-time vs. Run-time

- **`const`**: Constants declared with `const` are handled at compile time. This means that the value of the constant is determined and set when the script is being compiled, before it is executed.

  ```php
  const MAX_USERS = 100;
  ```

- **`define()`**: Constants declared with define() are handled at run time. This means that the value of the constant is determined and set during the execution of the script.

  ```php
  define('MAX_USERS', 100);
  ```

### 2. Conditional Declaration

- **`const`**: Because const is handled at compile time, you cannot conditionally define a constant using const. The const keyword must be used in a straightforward, unambiguous declaration.

```php
    if($condition){
        const MAX_USERS = 100; // This will cause a syntax error
    }
```

- **`define()`**: Since `define()` is a function and operates at run time, you can use it within conditional statements or loops.

```php
    if($condition){
        define('MAX_USERS', 100); //This is perfectly valid
    }
```

### 3. Scope

- **`const`**: Constants declared with const are always defined within the scope in which they are declared. When used inside a class, they are scoped to that class.

```php
    class MyClass {
        const MAX_USERS = 100;
    }

    echo MyClass::MAX_USERS; //Outputs 100
```

- **`define()`**: Constants declared with `define()` are always defined in the global scope, regardless of where they are called. This means they can be accessed globally.

```php
class MyClass {
    function setConstant() {
        define('MAX_USERS', 100);
    }
}
$obj = new MyClass();
$obj->setConstant();
echo MAX_USERS;  // Outputs 100
```

### 4. Usage in Namespaces

- **`const`**: When using const within a namespace, the constant is scoped to that namespace.

```php
namespace MyNamespace;
const MAX_USERS = 100;
echo MAX_USERS;  // Outputs 100
```

**`define()`**: Constants declared with define() are always in the global namespace.

```php
namespace MyNamespace;
define('MAX_USERS', 100);
echo \MAX_USERS;  // Outputs 100
```