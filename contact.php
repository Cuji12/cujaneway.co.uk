<?php include('includes/header.php');?>
<?php include('includes/contact-submit.php');?>
<section class="page-upper">
    <h1 class="page-upper__title">Contact</h1>
    <p class="page-upper__description">Pop me a message</p>
</section>
<main class="container-2">
    <p class="message-sent <?= $sent == 1 ? 'show' : '';?>">Your message has been sent successfully, I'll be in touch with you soon :).</p>
    <div class="contact-container">
        <form action="" method="post" class="contact-form">
            <ul class="contact-form__list">
                <li class="contact-form__list-item">
                    <label for="name" class="contact-form__label">
                        Name <abbr title="required">*</abbr>
                    </label>
                    <input type="text" id="name" name="user_name" class="contact-form__input" required>
                </li>
                <li class="contact-form__list-item">
                    <label for="email" class="contact-form__label">
                        Email <abbr title="required">*</abbr>
                    </label>
                    <input type="email" id="email" name="user_email" class="contact-form__input" required>
                </li>
                <li class="contact-form__list-item">
                    <label for="message" class="contact-form__label">
                        Message <abbr title="required">*</abbr>
                    </label>
                    <textarea spellcheck="true" maxlength="256" rows="5" cols="10" 
                    id="message" name="user_message" class="contact-form__input contact-form__input--textarea" required></textarea>
                </li>
            </ul>
            <li class="contact-form__list-item contact-form__list-item--button">
                <button type="submit" class="animate-element contact-form__button">
                    <span class="desktop-hide">Send</span>
                    <span class="desktop-show">Send messasge</span>
                </button>
            </li>
        </form>
        <div class="doodle-container">
            <object class="doodle doodle--contact" type="image/svg+xml" data="assets/illustrations/doodle7.svg"></object>
        </div>
    </div>
<?php include('includes/footer.php');?>