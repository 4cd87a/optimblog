# OptimBlog - blog module for Opencart 3
This module allows you to create an infinite number of articles and categories for them. For example, you can create categories «News», «Articles», «Promotions», as well as create a full blog for your store with the breakdown of materials into categories.


## Concept and difference from other blog modules for Opencart 3.
### Other blogs for Opencart 3
Most (may been 100%, I have not seen analogues) of blog modules and other similar use the concept of cloning software code (controllers and related files - Model-View-Controller) categories of products and products themselves, turning scripts:
1. «product category» → «category of articles»
2. «product» → «article»
3. cloning Database tables is similar to categories and products.

Such an approach causes many conflicts. Errors and inconsistencies in practice was more than enough. Describe them all here does not make sense..

### OptimBlog - concept and main idea
1. Categories are assigned a type - Product/Article.
2. The functional of the Article is extended in the same way as the functional of the Product.
3. Reviews similarly categories are divided into 2 types - Product/Article. And also added the ability to display «Store Reply» to «Review» using HTML.
4. This blog module does not replace Opencart 3 files.
5. The concept of Opencart in the names and definitions has been saved, and the appearance of the interface familiar to the store administrator has been saved too.
6. There is no conflict **SEO URL**, because it uses the functionality of Opencart. Which you can expand by the applied modifications.
7. The module consists of 90% modifications files that can be deleted or disabled at any time.


## The functionality and capabilities of the module OptimBlog
### General for categories, products and articles:
1. **Heading H1**
2. **Short Description** - Displayed in categories and modules displaying products or articles.
There is no modification for commodity modules.

### General for products and articles:
1. **Main Category** - Used to determine the breadcrumbs in the "URL from the base domain" are in the index of Search Engines. As well as the correct configuration of the canonical property for the site pages.
2. **Related Products and Articles** - There is no adding page on itself. It is possible to recommend in three directions: double, or in one of the parties.

### Articles:
1. **Tags**
2. **Date Available** and **Date End** of this publication
3. **Author**
4. **Attributes**
5. **Additional Images**

### For Developers:
- Some functions and features that developers can use to create their modules are laid down for the future. For example: «additional images» in the category settings can be displayed using the slider. And «Manufacturer» to use for appropriate bindings and sorting.
- Modules developers associated with the display products, you can easily override for Articles. Since the PHP-code of controllers and models is almost a mirror.
- Used the layout with Bootstrap 3 classes. That can be easily used for your templates without wasting time.


## The composition of the modules and modifications of the OptimCart Family
1. **optimblog-admin.ocmod.zip** — responsible for the adminstration part.
2. **optimblog-category.ocmod.zip** — responsible for the frontend part.
3. **optimblog-category-theme.ocmod.zip** — responsible for the frontend of the Theme.
4. **optimblog-seo_url.ocmod.zip** — makes the necessary changes to the catalog/controller/startup/seo_url.php.
5. **information-search-install.ocmod.zip** — adds permissions to the part of the code to install the module (controller) «Search for Articles» that are part of the **optimblog-category.ocmod.zip**.
6. **breadcrumb-last-3.0.0.0.ocmod.zip** — modification eliminates the clickability of the last item of the breadcrumbs.
7. **canonical-category-3.0.0.0.ocmod.zip** — modification that adds the parent categories to the canonical url of the subcategory.
8. **canonical-category-no-page-3.0.0.0.ocmod.zip** — modification is similar to the previous one, only removes the canonical URL on the pagination (page=n).
9. **canonical-information-3.0.0.0.ocmod.zip** — modification is similar to **canonical-category-3.0.0.0.ocmod.zip** that adds subcategories to the canonical URL of the article, if the Main Category is available in its settings.
10. **optimblog-module-bestseller_information.ocmod.zip** — module «Best Information».
11. **optimblog-module-featured_information.ocmod.zip** — module «Featured Information».
12. **optimblog-module-latest_information.ocmod.zip** — module «Latest Information».
13. **optimblog-module-category_information.ocmod.zip** — module «Category Information».
14. **optimblog-module-search_information.ocmod.zip** - module «Search Information».


## Information:
### Demo:
http://demo.optimcart.com
http://demo.optimcart.com/admin


## License
[GNU General Public License version 3 (GPLv3)](https://github.com/optimlab/optimblog/blob/master/LICENSE)
