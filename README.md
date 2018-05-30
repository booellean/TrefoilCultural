# ![Trefoil's logo][web-logo] [Trefoil Cultural and Environmental][web-link]
## Custom WordPress theme derived rom the [TwentySixteen theme][wp-link].
---

This is a website composed of two former websites, Isaacisms and White Washed Tomb. Part of this project was to export all post data, give all posts custom categories, and separate that content into their respective subsections.

![Screenshot of Isaacism's web page, a subsection of the Trefoil Cultural and Environmental site][web-preview]

This theme had minimal customization; removed the wrapper and added media queries to control the new compositional flow, and changed the location of post arrows to the footer, removing all other instances due to flow issues caused by said lack of wrapper.

```
the_posts_pagination( array(
	'prev_text'          => __( 'Previous page', 'trefoilcultural' ),
	'next_text'          => __( 'Next page', 'trefoilcultural' ),
	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'trefoilcultural' ) . ' </span>',
) );
```



[©Poly entertainment][poly-link]

[poly-link]: http://www.polyentertainment.com/
[web-link]: https://trefoilcultural.com/
[wp-link]: https://wordpress.org/themes/twentysixteen/
[web-logo]: https://i.imgur.com/9TKPRr7.png
[web-preview]: https://i.imgur.com/V5qSLL3.jpg