<?php

$form['c']['social_media'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social Media'),
    '#description' => t("Settings for enabling easy sharing with social media sites."),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE
);

$form['c']['social_media']['social_media_share'] = array(
    '#type' => 'checkbox',
    '#title' => t('Share this site'),
    '#description' => t("Enable the 'Share this site' bar."),
    '#default_value' => theme_get_setting('social_media_share'),
);

$form['c']['social_media']['share'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social Media Sharing'),
    '#description' => t("Select the social media sites to include in the 'Share this site' bar."),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#states' => array(
        'visible' => array(
            ':input[name="enable_sharing"]' => array('checked' => TRUE),
        ),
    ),
);

$form['c']['social_media']['share']['share_facebook'] = array(
    '#type' => 'checkbox',
    '#title' => t('Facebook'),
    '#default_value' => theme_get_setting('share_facebook'),
);
$form['c']['social_media']['share']['share_google_plus'] = array(
    '#type' => 'checkbox',
    '#title' => t('Google+'),
    '#default_value' => theme_get_setting('share_google_plus'),
);
$form['c']['social_media']['share']['share_twitter'] = array(
    '#type' => 'checkbox',
    '#title' => t('Twitter'),
    '#default_value' => theme_get_setting('share_twitter'),
);
$form['c']['social_media']['share']['share_linkedin'] = array(
    '#type' => 'checkbox',
    '#title' => t('LinkedIn'),
    '#default_value' => theme_get_setting('share_linkedin'),
);
$form['c']['social_media']['share']['share_pinterest'] = array(
    '#type' => 'checkbox',
    '#title' => t('Pinterest'),
    '#default_value' => theme_get_setting('share_pinterest'),
);
$form['c']['social_media']['share']['share_reddit'] = array(
    '#type' => 'checkbox',
    '#title' => t('Reddit'),
    '#default_value' => theme_get_setting('share_reddit'),
);
$form['c']['social_media']['social_media_follow'] = array(
    '#type' => 'checkbox',
    '#title' => t('Follow on social media'),
    '#description' => t("Enable the 'Follow Me' bar."),
    '#default_value' => theme_get_setting('social_media_follow'),
);


$form['c']['social_media']['follow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Follow on Social Media'),
    '#description' => t("Links for following your activity on social media sites."),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#states' => array(
        'visible' => array(
            ':input[name="enable_follow"]' => array('checked' => TRUE),
        ),
    ),
);
$form['c']['social_media']['follow']['follow_facebook'] = array(
    '#type' => 'checkbox',
    '#title' => t('Follow on Facebook'),
    '#description' => t("Provide a link to follow on facebook."),
    '#default_value' => theme_get_setting('follow_facebook'),
);
$form['c']['social_media']['follow']['follow_facebook_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook URL'),
    '#description' => t("URL of the facebook page users may follow."),
    '#default_value' => theme_get_setting('follow_facebook_url'),
    '#states' => array(
        'visible' => array(
            ':input[name="follow_facebook"]' => array('checked' => TRUE),
        ),
    ),
);
$form['c']['social_media']['follow']['follow_google_plus'] = array(
    '#type' => 'checkbox',
    '#title' => t('Follow on Google+'),
    '#description' => t("Provide a link to follow on Google+."),
    '#default_value' => theme_get_setting('follow_google_plus'),
);
$form['c']['social_media']['follow']['follow_google_plus_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Google+ URL'),
    '#description' => t("URL of the Google+ profile users may follow."),
    '#default_value' => theme_get_setting('follow_google_plus_url'),
    '#states' => array(
        'visible' => array(
            ':input[name="follow_google_plus"]' => array('checked' => TRUE),
        ),
    ),
);
$form['c']['social_media']['follow']['follow_twitter'] = array(
    '#type' => 'checkbox',
    '#title' => t('Follow on Twitter'),
    '#description' => t("Provide a link to follow on Twitter."),
    '#default_value' => theme_get_setting('follow_twitter'),
);
$form['c']['social_media']['follow']['follow_twitter_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter URL'),
    '#description' => t("URL of the Twitter profile users may follow."),
    '#default_value' => theme_get_setting('follow_twitter_url'),
    '#states' => array(
        'visible' => array(
            ':input[name="follow_twitter"]' => array('checked' => TRUE),
        ),
    ),
);
$form['c']['social_media']['follow']['follow_linkedin'] = array(
    '#type' => 'checkbox',
    '#title' => t('Follow on LinkedIn'),
    '#description' => t("Provide a link to follow on LinkedIn."),
    '#default_value' => theme_get_setting('follow_linkedin'),
);
$form['c']['social_media']['follow']['follow_linkedin_url'] = array(
    '#type' => 'textfield',
    '#title' => t('LinkedIn'),
    '#description' => t("URL of the LinkedIn profile users may follow."),
    '#default_value' => theme_get_setting('follow_linkedin_url'),
    '#states' => array(
        'visible' => array(
            ':input[name="follow_linkedin"]' => array('checked' => TRUE),
        ),
    ),
);