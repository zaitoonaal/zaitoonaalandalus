<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use DOMDocument;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function index(): Response
    {
        /*
        |--------------------------------------------------------------------------
        | XML Namespaces
        |--------------------------------------------------------------------------
        */

        $sitemapNamespace =
            'http://www.sitemaps.org/schemas/sitemap/0.9';

        $xhtmlNamespace =
            'http://www.w3.org/1999/xhtml';

        $imageNamespace =
            'http://www.google.com/schemas/sitemap-image/1.1';


        /*
        |--------------------------------------------------------------------------
        | Create XML Document
        |--------------------------------------------------------------------------
        */

        $dom =
            new DOMDocument(
                '1.0',
                'UTF-8'
            );


        $dom->formatOutput =
            true;


        /*
        |--------------------------------------------------------------------------
        | Root <urlset>
        |--------------------------------------------------------------------------
        */

        $urlset =
            $dom->createElementNS(
                $sitemapNamespace,
                'urlset'
            );


        $urlset->setAttributeNS(
            'http://www.w3.org/2000/xmlns/',
            'xmlns:xhtml',
            $xhtmlNamespace
        );


        $urlset->setAttributeNS(
            'http://www.w3.org/2000/xmlns/',
            'xmlns:image',
            $imageNamespace
        );


        $dom->appendChild(
            $urlset
        );


        /*
        |--------------------------------------------------------------------------
        | Helper: Add URL
        |--------------------------------------------------------------------------
        */

        $addUrl =
            function (
                string $url,
                ?string $lastmod = null,
                ?string $alternateEnglish = null,
                ?string $alternateArabic = null,
                ?string $imageUrl = null,
                ?string $imageTitle = null
            ) use (
                $dom,
                $urlset,
                $sitemapNamespace,
                $xhtmlNamespace,
                $imageNamespace
            ): void {

                /*
                |--------------------------------------------------------------------------
                | <url>
                |--------------------------------------------------------------------------
                */

                $urlElement =
                    $dom->createElementNS(
                        $sitemapNamespace,
                        'url'
                    );


                /*
                |--------------------------------------------------------------------------
                | <loc>
                |--------------------------------------------------------------------------
                */

                $loc =
                    $dom->createElementNS(
                        $sitemapNamespace,
                        'loc'
                    );


                $loc->appendChild(
                    $dom->createTextNode(
                        $url
                    )
                );


                $urlElement->appendChild(
                    $loc
                );


                /*
                |--------------------------------------------------------------------------
                | <lastmod>
                |--------------------------------------------------------------------------
                */

                if (
                    filled(
                        $lastmod
                    )
                ) {

                    $lastmodElement =
                        $dom->createElementNS(
                            $sitemapNamespace,
                            'lastmod'
                        );


                    $lastmodElement->appendChild(
                        $dom->createTextNode(
                            $lastmod
                        )
                    );


                    $urlElement->appendChild(
                        $lastmodElement
                    );

                }


                /*
                |--------------------------------------------------------------------------
                | English Hreflang
                |--------------------------------------------------------------------------
                */

                if (
                    filled(
                        $alternateEnglish
                    )
                ) {

                    $englishLink =
                        $dom->createElementNS(
                            $xhtmlNamespace,
                            'xhtml:link'
                        );


                    $englishLink->setAttribute(
                        'rel',
                        'alternate'
                    );


                    $englishLink->setAttribute(
                        'hreflang',
                        'en'
                    );


                    $englishLink->setAttribute(
                        'href',
                        $alternateEnglish
                    );


                    $urlElement->appendChild(
                        $englishLink
                    );

                }


                /*
                |--------------------------------------------------------------------------
                | Arabic Hreflang
                |--------------------------------------------------------------------------
                */

                if (
                    filled(
                        $alternateArabic
                    )
                ) {

                    $arabicLink =
                        $dom->createElementNS(
                            $xhtmlNamespace,
                            'xhtml:link'
                        );


                    $arabicLink->setAttribute(
                        'rel',
                        'alternate'
                    );


                    $arabicLink->setAttribute(
                        'hreflang',
                        'ar'
                    );


                    $arabicLink->setAttribute(
                        'href',
                        $alternateArabic
                    );


                    $urlElement->appendChild(
                        $arabicLink
                    );

                }


                /*
                |--------------------------------------------------------------------------
                | X-Default
                |--------------------------------------------------------------------------
                */

                if (
                    filled(
                        $alternateEnglish
                    )
                ) {

                    $defaultLink =
                        $dom->createElementNS(
                            $xhtmlNamespace,
                            'xhtml:link'
                        );


                    $defaultLink->setAttribute(
                        'rel',
                        'alternate'
                    );


                    $defaultLink->setAttribute(
                        'hreflang',
                        'x-default'
                    );


                    $defaultLink->setAttribute(
                        'href',
                        $alternateEnglish
                    );


                    $urlElement->appendChild(
                        $defaultLink
                    );

                }


                /*
                |--------------------------------------------------------------------------
                | Featured Image
                |--------------------------------------------------------------------------
                */

                if (
                    filled(
                        $imageUrl
                    )
                ) {

                    $image =
                        $dom->createElementNS(
                            $imageNamespace,
                            'image:image'
                        );


                    /*
                    |--------------------------------------------------------------------------
                    | Image Location
                    |--------------------------------------------------------------------------
                    */

                    $imageLocation =
                        $dom->createElementNS(
                            $imageNamespace,
                            'image:loc'
                        );


                    $imageLocation->appendChild(
                        $dom->createTextNode(
                            $imageUrl
                        )
                    );


                    $image->appendChild(
                        $imageLocation
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | Image Title
                    |--------------------------------------------------------------------------
                    */

                    if (
                        filled(
                            $imageTitle
                        )
                    ) {

                        $title =
                            $dom->createElementNS(
                                $imageNamespace,
                                'image:title'
                            );


                        $title->appendChild(
                            $dom->createTextNode(
                                $imageTitle
                            )
                        );


                        $image->appendChild(
                            $title
                        );

                    }


                    $urlElement->appendChild(
                        $image
                    );

                }


                /*
                |--------------------------------------------------------------------------
                | Add URL to Sitemap
                |--------------------------------------------------------------------------
                */

                $urlset->appendChild(
                    $urlElement
                );

            };


        /*
        |--------------------------------------------------------------------------
        | Static Website Pages
        |--------------------------------------------------------------------------
        */

        $addUrl(
            route('home')
        );


        $addUrl(
            route('menu')
        );


        $addUrl(
            route('gallery')
        );


        $addUrl(
            route('reservations.create')
        );


        $addUrl(
            route('contact')
        );


        /*
        |--------------------------------------------------------------------------
        | Blog Listing URLs
        |--------------------------------------------------------------------------
        */

        $englishBlogUrl =
            route(
                'blog'
            );


        $arabicBlogUrl =
            Route::has(
                'blog.ar'
            )
                ? route(
                    'blog.ar'
                )
                : null;


        /*
        |--------------------------------------------------------------------------
        | English Blog Listing
        |--------------------------------------------------------------------------
        */

        $addUrl(
            $englishBlogUrl,
            null,
            $englishBlogUrl,
            $arabicBlogUrl
        );


        /*
        |--------------------------------------------------------------------------
        | Arabic Blog Listing
        |--------------------------------------------------------------------------
        */

        if (
            filled(
                $arabicBlogUrl
            )
        ) {

            $addUrl(
                $arabicBlogUrl,
                null,
                $englishBlogUrl,
                $arabicBlogUrl
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Get Published Blog Posts
        |--------------------------------------------------------------------------
        */

        $posts =
            BlogPost::query()

                ->published()

                ->orderByDesc(
                    'updated_at'
                )

                ->get([
                    'id',

                    'title',
                    'title_ar',

                    'slug',
                    'slug_ar',

                    'content_ar',

                    'featured_image',
                    'featured_image_alt',
                    'featured_image_alt_ar',

                    'published_at',
                    'updated_at',
                ]);


        /*
        |--------------------------------------------------------------------------
        | Featured Image Helper
        |--------------------------------------------------------------------------
        */

        $getImageUrl =
            function (
                ?string $image
            ): ?string {

                if (
                    blank(
                        $image
                    )
                ) {

                    return null;

                }


                /*
                |--------------------------------------------------------------------------
                | External URL
                |--------------------------------------------------------------------------
                */

                if (
                    str_starts_with(
                        $image,
                        'http://'
                    )
                    ||
                    str_starts_with(
                        $image,
                        'https://'
                    )
                ) {

                    return $image;

                }


                /*
                |--------------------------------------------------------------------------
                | Laravel Storage Image
                |--------------------------------------------------------------------------
                */

                return asset(
                    'storage/'
                    . ltrim(
                        $image,
                        '/'
                    )
                );

            };


        /*
        |--------------------------------------------------------------------------
        | Add Blog Posts
        |--------------------------------------------------------------------------
        */

        foreach (
            $posts
            as $post
        ) {

            /*
            |--------------------------------------------------------------------------
            | English Post URL
            |--------------------------------------------------------------------------
            */

            $englishUrl =
                route(
                    'blog.show',
                    $post->slug
                );


            /*
            |--------------------------------------------------------------------------
            | Check Arabic Version
            |--------------------------------------------------------------------------
            */

            $hasArabicVersion =
                Route::has(
                    'blog.ar.show'
                )
                &&
                filled(
                    $post->slug_ar
                )
                &&
                filled(
                    $post->title_ar
                )
                &&
                filled(
                    $post->content_ar
                );


            /*
            |--------------------------------------------------------------------------
            | Arabic Post URL
            |--------------------------------------------------------------------------
            */

            $arabicUrl =
                $hasArabicVersion
                    ? route(
                        'blog.ar.show',
                        $post->slug_ar
                    )
                    : null;


            /*
            |--------------------------------------------------------------------------
            | Last Modified
            |--------------------------------------------------------------------------
            */

            $lastModified =
                $post->updated_at
                    ?->toAtomString();


            /*
            |--------------------------------------------------------------------------
            | Featured Image
            |--------------------------------------------------------------------------
            */

            $imageUrl =
                $getImageUrl(
                    $post->featured_image
                );


            /*
            |--------------------------------------------------------------------------
            | English Article
            |--------------------------------------------------------------------------
            */

            $addUrl(

                $englishUrl,

                $lastModified,

                $englishUrl,

                $arabicUrl,

                $imageUrl,

                $post->featured_image_alt
                    ?: $post->title

            );


            /*
            |--------------------------------------------------------------------------
            | Arabic Article
            |--------------------------------------------------------------------------
            */

            if (
                $hasArabicVersion
            ) {

                $addUrl(

                    $arabicUrl,

                    $lastModified,

                    $englishUrl,

                    $arabicUrl,

                    $imageUrl,

                    $post->featured_image_alt_ar
                        ?: $post->title_ar

                );

            }

        }


        /*
        |--------------------------------------------------------------------------
        | Generate Final XML
        |--------------------------------------------------------------------------
        */

        $xml =
            $dom->saveXML();


        /*
        |--------------------------------------------------------------------------
        | XML HTTP Response
        |--------------------------------------------------------------------------
        */

        return response(
            $xml,
            200,
            [
                'Content-Type' =>
                    'application/xml; charset=UTF-8',

                'X-Content-Type-Options' =>
                    'nosniff',

                'Cache-Control' =>
                    'public, max-age=3600',
            ]
        );
    }
}