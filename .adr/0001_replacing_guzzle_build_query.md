# REPLACING GUZZLE BUILD_QUERY OCCURRENCES

* Deciders: Monika Lipińska
* DATE: 2023-11-16

## Context and Problem Statement
We had compatibility issues concerning `Guzzle`.

We were using a **3.0.24** version of a **swagger-codegen** that was openly using `GuzzleHttp\Psr7::build_query` method that was removed from `GuzzleHttp\Psr7` library since its **2.0** version.

## Considered Options

* Using the latest (**3.0.50**) version of **swagger-codegen**.

* Changing generated SDK code using mustache templates so instead of a `build_query` from `Guzzle` we use a private method `buildQuery` in each of `*Api` classes.

## Decision Outcome
With the newest version of **swagger-codegen** we would end up with code using new `GuzzleHttp\Psr7\Query::build`... but we would also lose support for **PHP 5** that we still have to maintain.

Using mustache templates in order to change the code generated is not a perfect solution (as now we have the same method repeated among `*Api.php` files), but it does the job.

### Changes made

- `api-docs-generator.yml`
  Changing code generation command call by specifying **-t** parameter which is for templates folder
- introducing `swagger-codegen-templates` folder with:
- - `api.mustache`
    Copied from **swagger-codegen** repository and changed:
- - * whenever a placeholder `{{invokerPackage}}` was preceded with `\` I changed it into `DocPlanner\Client `as otherwise it was not being replaced in code generation process
- - * replacing `\GuzzleHttp\Psr7\Query::build($formParams);` with `$this->buildQuery($formParams); `and putting new protected method `protected function buildQuery($params, $encoding = PHP_QUERY_RFC3986)` in the end (body of that method comes from Guzzle)
- - * wherever new generated code would be different than the one we already had (and that would not be our Guzzle build query case) I was preventing those changes by using our (existing) version of code
- - `partial_header.mustache`
    Copied from **swagger-codegen** repository and unchanged. It seems that it just has to be there as without it I had error in the generation process saying that it's missing.
- - `ObjectSerializer.mustache`
    Copied from `swagger-codegen` repository and changed because I couldn't make the generator to create exactly same lines using `ObjectSerializer::toQueryValue`. It was creating them with only one parameter when we had two before but as I checked the second one was never used in our code anyway.

Original mustache files that I was changing can be found in [swagger-codegen-original-templates](swagger-codegen-original-templates) folder together with a [reverse-mustaches.diff](swagger-codegen-original-templates/reverse-mustaches.diff) file that shows what exactly changed.



