<?php

/**
 * Profile Completion Config
 *
 * Weights must sum to 100 across all sections.
 * 'fields'      => plain required fields (all must exist to get full section score)
 * 'any_of'      => at least ONE non-empty field in the group scores full weight for that sub-item
 * 'pairs'       => arrays of [question_field, answer_field] — both must be filled to count as 1 complete item
 * 'min_required'=> for pairs/repeatable groups, how many need to be filled for 100% of that sub-weight
 */

return [

    'sections' => [

        'account' => [
            'weight' => 10,
            'fields' => ['username', 'email', 'mobile','paid_status'],
        ],

        'personal_info' => [
            'weight' => 15,
            'fields' => [
                'first_name', 'last_name', 'personal_email',
                'personal_phone', 'personal_address','personal_city', 'whatsapp', 'profile_pic',
            ],
        ],

        'business_info' => [
            'weight' => 15,
            'fields' => [
                'business_name', 'business_slug','mobile','pauseLead',
                'business_description', 'state','city','pincode','landmark', 'address',
                'year_of_estb',
            ],
        ],

 

        'contact_details' => [
            'weight' => 10,
            'fields' => ['mobile', 'whatsapp', 'email','coins_free','coins_amt'],
        ],

        'address' => [
            'weight' => 10,
            'fields' => [
                'address', 'area', 'city', 'state', 'pincode', 'zone',
            ],
        ],

        'seo' => [
            'weight' => 10,
            'fields' => ['meta_title', 'meta_description', 'business_description', 'business_intro','business_overview'],
        ],

        'social_media' => [
            'weight' => 5,           
            'fields' => [
                'facebook_url', 'instagram_url', 'twitter_url',
                'linkedin_url', 'youtube_url', 'pinterest_url',
            ],
            'min_required' => 2, // 2 filled = 100% of this section's weight
        ],

        'legal_documents' => [
            'weight' => 5,
            'fields' => ['gst_no', 'pan_no', 'cin_no', 'msme_no','certified_status'],
            'min_required' => 1,
        ],

        'media_gallery' => [
            'weight' => 10,
            'fields' => [
                'logo', 'profile_pic', 'pictures',
                'recent_img1', 'recent_img2', 'recent_img3',
                'recent_img4', 'recent_img5', 'recent_img6',
            ],
            'min_required' => 4, // any 4 of these 9 = full weight
        ],

        'faqs' => [
            'weight' => 10,
            'pairs' => [
                ['faqq1', 'faqa1'], ['faqq2', 'faqa2'], ['faqq3', 'faqa3'],
                ['faqq4', 'faqa4'], ['faqq5', 'faqa5'],
            ],
            'min_required' => 3, 
        ],

    ],

];