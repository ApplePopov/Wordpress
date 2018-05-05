<?php
/**
 *
 * Template Name: Contact Us
 *
 * The template for displaying home page.
 * @package Business_Plan _Pro
 *
 *
 */
get_header(); ?>
<div class="container bg-box-holder" style="max-width: 100%;">
    <div class="bg-box"></div>
    <article class="box-light-holder contact-content">
        <div class="block block-left">
            <div class="title-description"><h2 >HOW CAN WE HELP?</h2>
                <div class="text-content">
                    <p>There's nothing in the world that we love more than hearing from professionals just like
                        you. Positive stuff, helpful feedback about the site, or just a note about literally
                        anything on your mind. We promise to respond too, because there is nothing more annoying
                        than sending a note like this and never hearing back.</p></div>
            </div>
            <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                <div class="input-group"><p><input
                                class="form-control-border-light ng-untouched ng-pristine ng-invalid"
                                formControlName="name" placeholder="Name" type="text" value=""></p>
                    <p><input class="form-control-border-light ng-untouched ng-pristine ng-invalid"
                              formControlName="email" placeholder="Email" type="text" value=""></p></div>
                <p><textarea class="form-control-border-light ng-untouched ng-pristine ng-invalid"
                             formControlName="message" placeholder="Message" rows="4"
                             value=""></textarea></p>
                <p class="captcha"><span></span></p>
                <button class="btn btn-full btn-primary btn-border-anim" type="submit"><span>Submit</span>
                </button>
            </form>
        </div>
        <div class="block block-right">
            <div class="contact-title"><h2>LET’S GET SOCIAL</h2></div>
            <ul class="contact-social-links">
                <li><a target="_blank" href="https://www.facebook.com/findmyprofession">
                        <svg height="40" width="30">
                            <use xlink:href="<?php echo get_template_directory_uri().'/images/svg/sprite.svg#facebook'?>"</use>
                        </svg>
                    </a></li>
                <li><a target="_blank" href="https://twitter.com/fmpdaily">
                        <svg height="30" width="30">
                            <use xlink:href="<?php echo get_template_directory_uri().'/images/svg/sprite.svg#twitter'?>"</use>
                        </svg>
                    </a></li>
                <li><a target="_blank" href="https://www.linkedin.com/company/find-my-profession/">
                        <svg height="30" width="30">
                            <use xlink:href="<?php echo get_template_directory_uri().'/images/svg/sprite.svg#linkedin'?>"</use>
                        </svg>
                    </a></li>
            </ul>
        </div>
    </article>
</div>
<?php get_footer(); ?>
