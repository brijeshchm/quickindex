<?php

namespace App\Services;

use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientCommonService
{
    public function get(int $clientID): array
    {
        $client = Client::findOrFail($clientID);

        /*
        |--------------------------------------------------------------------------
        | New / Unread Leads
        |--------------------------------------------------------------------------
        */

        $leads = DB::table('assigned_leads')
            ->where('client_id', $clientID)
            ->where('readLead', 0)
            ->count();


        /*
        |--------------------------------------------------------------------------
        | Profile Completion
        |--------------------------------------------------------------------------
        */

        $completion = $client->getProfileCompletionBreakdown();

        $percent = $completion['total'] ?? 0;


        /*
        |--------------------------------------------------------------------------
        | Images
        |--------------------------------------------------------------------------
        */

        $logo = $this->unserializeData($client->logo);

        $profilePic = $this->unserializeData(
            $client->profile_pic
        );


        /*
        |--------------------------------------------------------------------------
        | Profile
        |--------------------------------------------------------------------------
        */

        $profile = [

            'name' => $client->business_name,

            'category' => '',

            'verified' => $client->verified,

            'profileCompletion' => $percent,

            'yearEstablished' => $client->year_of_estb,

            'description' => $client->business_description,

            'overview' => $client->business_overview,

            'ownerName' => trim(
                ($client->first_name ?? '') . ' ' .
                ($client->last_name ?? '')
            ),

            'ownerPhone' => $client->personal_phone,

            'ownerEmail' => $client->personal_email,

            'phone' => $client->mobile,

            'email' => $client->email,

            'website' => $client->website,

            'city' => $client->city,

            'state' => $client->state,

            'zone' => $client->zone,

            'area' => $client->area,

            'pincode' => $client->pincode,

            'landmark' => $client->landmark,

            'certifications' => $client->certifications,

            'business_map' => $client->business_map,

            'address' => $client->address,

            'hours' => 'Mon-Sat: 9:00 AM - 7:00 PM',

            'metaTitle' => '',

            'metaDescription' => '',

            'metaKeyword' => '',

            'logoUrl' => $logo['large']['src'] ?? '#',

            'bannerUrl' => $profilePic['large']['src'] ?? '#',

            'facebookUrl' => $client->facebook_url,

            'instagramUrl' => $client->instagram_url,

            'twitterUrl' => $client->twitter_url,

            'linkedinUrl' => $client->linkedin_url,

            'youtubeUrl' => $client->youtube_url,

            'pinterestUrl' => $client->pinterest_url,

            'newLead' => $leads,
        ];


        /*
        |--------------------------------------------------------------------------
        | Account
        |--------------------------------------------------------------------------
        */

        $account = [

            'coins' => $client->coins_amt,

            'pauseLead' => $client->pauseLead,

            'activeStatus' => $client->active_status,

            'paidStatus' => $client->paid_status,

            'certifiedStatus' => $client->certified_status,

            'trustedStatus' => $client->trusted_status,

            'gstStatus' => $client->gst_status,

            'chatFeature' => true,

            'clientContactStatus' => true,

            'clientTransferStatus' => false,

            'clientGSTStatus' => $client->gst_status,

            'postingAndReceivingStatus' => true,

            'membershipType' => $client->client_type,

            'packageName' => ucfirst(
                $client->client_type ?? ''
            ),

            'memberSince' => $this->formatDate(
                $client->expired_from
            ),

            'membershipEndsOn' => $this->formatDate(
                $client->expired_on
            ),

            'dailyLeadLimit' => 25,

            'leadsUsedToday' => 8,
        ];


        /*
        |--------------------------------------------------------------------------
        | Profile Tabs
        |--------------------------------------------------------------------------
        */

        $tabs = [

            'general' => 'Basic Info',

            'personal' => 'Personal Details',

            'seo' => 'SEO Meta',

            'keywords' => 'Service Keywords',

            'locations' => 'Service Areas',

            'media' => 'Media & Gallery',

            'awards' => 'Awards',

            'certs' => 'Certificates',

            'socials' => 'Social Links',

            'recent' => 'Recent Activity',

            'faqs' => 'FAQs',
        ];


        /*
        |--------------------------------------------------------------------------
        | Lead Tabs
        |--------------------------------------------------------------------------
        */

        $leadsTabs = [

            'leads' => 'Lead',

            'new-lead' => 'New Leads',

            'favorites' => 'Favorites',

            'archived' => 'Archived',

            'manage-enquiry' => 'Manage Enquiry',
        ];


        /*
        |--------------------------------------------------------------------------
        | Return
        |--------------------------------------------------------------------------
        */

        return [

            'profile' => $profile,

            'account' => $account,

            'completion' => $completion,

            'tabs' => $tabs,

            'leadsTabs' => $leadsTabs,
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Safely unserialize old image data
    |--------------------------------------------------------------------------
    */

    private function unserializeData($value): array
    {
        if (empty($value)) {
            return [];
        }

        try {

            $data = unserialize($value);

            return is_array($data)
                ? $data
                : [];

        } catch (\Throwable $e) {

            return [];
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Date Format
    |--------------------------------------------------------------------------
    */

    private function formatDate($date): ?string
    {
        if (empty($date)) {
            return null;
        }

        return date(
            'd-m-Y',
            strtotime($date)
        );
    }
}