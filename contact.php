<?php
/*
Template Name: お問い合わせフォーム
*/
?>

<?php get_header(); ?>
    <main class="main_subpage">
        <h2 class="heading_subpage">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/heading_contact.svg" alt="">
        </h2>
        <form class="form_contact" action="<?php echo htmlspecialchars($_SERVER['SCRIPT_NAME'] );?>" method="post">
            <div class="form_element_wrapper">
                <label for="user_name">お名前<span class="required">*</span></label>
                <input type="text" id="user_name" name="contact_name" value="">
            </div>
            <div class="form_element_wrapper">
                <label for="user_mail">メールアドレス<span class="required">*</span></label>
                <input type="text" id="user_mail" name="contact_mail" value="">
            </div>
            <div class="form_element_wrapper">
                <label for="user_phonenumber">お電話番号<span class="required">*</span></label>
                <input type="text" id="user_phonenumber" name="contact_phonenumber" value="">
            </div>
            <div class="form_element_wrapper">
                <label for="user_content">お問い合わせ内容<span class="required">*</span></label>
                <textarea id="user_content" name="contact_content" value=""></textarea>
            </div>
            <button class="button_slide button_contact movable_element" type="submit">
                <div class="button_content_wrapper">
                    <div>
                        送信する
                        <span class="button_arrow"></span>
                    </div>
                </div>
            </button>
        </form>
    </main>
<?php get_footer(); ?>


