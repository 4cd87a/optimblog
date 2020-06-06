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
### Categories:
1. **Heading H1**
2. **Short Description** - Displayed in categories and modules displaying products or articles.
There is no modification for commodity modules.
3. **Additional Images**

### Products:
1. **Heading H1**
2. **Short Description** - Displayed in categories and modules displaying products or articles.
There is no modification for commodity modules.
3. **Main Category** - Used to determine the breadcrumbs in the "URL from the base domain" are in the index of Search Engines. As well as the correct configuration of the canonical property for the site pages.
4. **Related Products and Articles** - There is no adding page on itself. It is possible to recommend in three directions: double, or in one of the parties.

### Articles:
1. **Heading H1**
2. **Short Description** - Displayed in categories and modules displaying products or articles.
There is no modification for commodity modules.
3. **Main Category** - Used to determine the breadcrumbs in the "URL from the base domain" are in the index of Search Engines. As well as the correct configuration of the canonical property for the site pages.
4. **Related Products and Articles** - There is no adding page on itself. It is possible to recommend in three directions: double, or in one of the parties.
5. **Tags**
6. **Date Added**
7. **Date Available** and **Date End** of this publication
8. **Author**
9. **Attributes**
10. **Additional Images**

### For Developers:
- Some functions and features that developers can use to create their modules are laid down for the future. For example: «additional images» in the category settings can be displayed using the slider. And «Manufacturer» to use for appropriate bindings and sorting.
- Modules developers associated with the display products, you can easily override for Articles. Since the PHP-code of controllers and models is almost a mirror.
- Used the layout with Bootstrap 3 classes. That can be easily used for your templates without wasting time.


## The composition of the modules and modifications of the OptimBlog Family
1. **optimblog.ocmod.zip** — main module.
2. **optimblog-module-bestseller-information.ocmod.zip** — module «Best Articles».
3. **optimblog-module-featured-information.ocmod.zip** — module «Featured Articles».
4. **optimblog-module-latest-information.ocmod.zip** — module «Latest Articles».
5. **optimblog-module-category-information.ocmod.zip** — module «Category Articles».
6. **optimblog-module-search-information.ocmod.zip** - module «Search Articles».
6. **optimblog-admin-filter.ocmod.zip** - modification to extend the ability to filter Categories, Products and Articles.


## Information:
### Demo:
- http://demo.optimcart.com
- http://demo.optimcart.com/admin


## License
[GNU General Public License version 3 (GPLv3)](https://github.com/optimlab/optimblog/blob/master/LICENSE)


## Install Instructions
1. Install **optimblog.ocmod.zip**.
2. Update modification cache.
3. Go to «User Groups» and assign the appropriate Access Permission:`extension/extension/information` and `extension/information/optimblog`.
4. In the «Extensions -> Extensions» section drop-down list, select «Articles».
5. Install the OptimBlog module for your store (multi-store module, similar to Theme modules).
6. Edit the OptimBlog module settings and save.
7. Go to Design -> Layouts -> Add Layout «Category Article» -> Add Route `extension/information/category` -> Save.



## Upgrade Instructions
### From 3.0.0.x to 3.0.1.x
1. In the «Extensions->Extensions» section drop-down list, select «Articles».
2. Uninstall the OptimBlog module.
3. Go to Extension Installer.
4. Uninstall **optimblog.ocmod.zip**.
5. Uninstall all optimblog-modules and optimblog-modifications.
6. Download the latest version OptimBlog modules and modifications.
7. ReInstall all OptimBlog modules and modifications.
