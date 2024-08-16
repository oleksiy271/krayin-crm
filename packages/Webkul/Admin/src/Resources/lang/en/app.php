<?php

return [
    'users' => [
        'login' => [
            'email'                => 'Email Address',
            'forget-password-link' => 'Forget Password ?',
            'password'             => 'Password',
            'submit-btn'           => 'Sign In',
            'title'                => 'Sign In',
        ],

        'forget-password' => [
            'create' => [
                'email'           => 'Registered Email',
                'email-not-exist' => 'Email Not Exists',
                'page-title'      => 'Forget Password',
                'reset-link-sent' => 'Reset Password link sent',
                'sign-in-link'    => 'Back to Sign In ?',
                'submit-btn'      => 'Reset',
                'title'           => 'Recover Password',
            ],
        ],

        'reset-password' => [
            'back-link-title'  => 'Back to Sign In ?',
            'confirm-password' => 'Confirm Password',
            'email'            => 'Registered Email',
            'password'         => 'Password',
            'submit-btn'       => 'Reset Password',
            'title'            => 'Reset Password',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn'          => 'Back',
            'change-password'   => 'Change Password',
            'confirm-password'  => 'Confirm Password',
            'current-password'  => 'Current Password',
            'email'             => 'Email',
            'general'           => 'General',
            'invalid-password'  => 'The current password you entered is incorrect.',
            'name'              => 'Name',
            'password'          => 'Password',
            'profile-image'     => 'Profile Image',
            'save-btn'          => 'Save Account',
            'title'             => 'My Account',
            'update-success'    => 'Account updated successfully',
            'upload-image-info' => 'Upload a Profile Image (110px X 110px) in PNG or JPG Format',
        ],
    ],

    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'Mail',
                    'title'        => 'Compose Mail',
                    'to'           => 'To',
                    'enter-emails' => 'Press enter to add emails',
                    'cc'           => 'CC',
                    'bcc'          => 'BCC',
                    'subject'      => 'Subject',
                    'send-btn'     => 'Send',
                    'message'      => 'Message',
                ],

                'file' => [
                    'btn'           => 'File',
                    'title'         => 'Add File',
                    'title-control' => 'Title',
                    'name'          => 'Name',
                    'description'   => 'Description',
                    'file'          => 'File',
                    'save-btn'      => 'Save File',
                ],

                'note' => [
                    'btn'      => 'Note',
                    'title'    => 'Add Note',
                    'comment'  => 'Comment',
                    'save-btn' => 'Save Note',
                ],

                'activity' => [
                    'btn'           => 'Activity',
                    'title'         => 'Add Activity',
                    'title-control' => 'Title',
                    'description'   => 'Description',
                    'schedule-from' => 'Schedule From',
                    'schedule-to'   => 'Schedule To',
                    'location'      => 'Location',
                    'call'          => 'Call',
                    'meeting'       => 'Meeting',
                    'lunch'         => 'Lunch',
                    'save-btn'      => 'Save Activity',

                    'participants' => [
                        'title'       => 'Participants',
                        'placeholder' => 'Type to search participants',
                        'users'       => 'Users',
                        'persons'     => 'Persons',
                        'no-results'  => 'No result found...',
                    ],
                ],
            ],

            'index' => [
                'from'         => 'From',
                'to'           => 'To',
                'cc'           => 'Cc',
                'bcc'          => 'Bcc',
                'all'          => 'All',
                'planned'      => 'Planned',
                'calls'        => 'Calls',
                'meetings'     => 'Meetings',
                'lunches'      => 'Lunches',
                'files'        => 'Files',
                'quotes'       => 'Quotes',
                'notes'        => 'Notes',
                'emails'       => 'Emails',
                'by-user'      => 'By :user',
                'scheduled-on' => 'Scheduled on',
                'location'     => 'Location',
                'participants' => 'Participants',
                'mark-as-done' => 'Mark as Done',
                'delete'       => 'Delete',
                'edit'         => 'Edit',
                'view'         => 'View',
                'unlink'       => 'Unlink',

                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'No Activities Found',
                        'description' => 'No activities found for this. You can add activities by clicking on the button on the left panel.',
                    ],

                    'planned' => [
                        'title'       => 'No Planned Activities Found',
                        'description' => 'No planned activities found for this. You can add planned activities by clicking on the button on the left panel.',
                    ],

                    'notes' => [
                        'title'       => 'No Notes Found',
                        'description' => 'No notes found for this. You can add notes by clicking on the button on the left panel.',
                    ],

                    'calls' => [
                        'title'       => 'No Calls Found',
                        'description' => 'No notes found for this. You can add notes by clicking on the button on the left panel.',
                    ],

                    'meetings' => [
                        'title'       => 'No Meetings Found',
                        'description' => 'No meetings found for this. You can add meetings by clicking on the button on the left panel.',
                    ],

                    'lunches' => [
                        'title'       => 'No Lunches Found',
                        'description' => 'No lunches found for this. You can add lunches by clicking on the button on the left panel.',
                    ],

                    'files' => [
                        'title'       => 'No Files Found',
                        'description' => 'No files found for this. You can add files by clicking on the button on the left panel.',
                    ],

                    'emails' => [
                        'title'       => 'No Emails Found',
                        'description' => 'No emails found for this. You can add email by clicking on the button on the left panel.',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => 'Add Image',
                'ai-add-image-btn'  => 'Magic AI',
                'allowed-types'     => 'png, jpeg, jpg',
                'not-allowed-error' => 'Only images files (.jpeg, .jpg, .png, ..) are allowed.',

                'placeholders' => [
                    'front'     => 'Front',
                    'next'      => 'Next',
                    'size'      => 'Size',
                    'use-cases' => 'Use Cases',
                    'zoom'      => 'Zoom',
                ],
            ],

            'videos' => [
                'add-video-btn'     => 'Add Video',
                'allowed-types'     => 'mp4, webm, mkv',
                'not-allowed-error' => 'Only videos files (.mp4, .mov, .ogg ..) are allowed.',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'No records have been selected.',
                'must-select-a-mass-action-option' => 'You must select a mass action\'s option.',
                'must-select-a-mass-action'        => 'You must select a mass action.',
            ],

            'toolbar' => [
                'length-of' => ':length of',
                'of'        => 'of',
                'per-page'  => 'Per Page',
                'results'   => ':total Results',
                'delete'    => 'Delete',
                'selected'  => ':total Items Selected',

                'mass-actions' => [
                    'submit'        => 'Submit',
                    'select-option' => 'Select Option',
                    'select-action' => 'Select Action',
                ],

                'filter' => [
                    'apply-filters-btn' => 'Apply Filters',
                    'back-btn'          => 'Back',
                    'create-new-filter' => 'Create New Filter',
                    'custom-filters'    => 'Custom Filters',
                    'delete-error'      => 'Something went wrong while deleting the filter, please try again.',
                    'delete-success'    => 'Filter has been deleted successfully.',
                    'empty-description' => 'There is no selected filters available to save. Please select filters to save.',
                    'empty-title'       => 'Add Filters to Save',
                    'name'              => 'Name',
                    'quick-filters'     => 'Quick Filters',
                    'save-btn'          => 'Save',
                    'save-filter'       => 'Save Filter',
                    'saved-success'     => 'Filter has been saved successfully.',
                    'selected-filters'  => 'Selected Filters',
                    'title'             => 'Filter',
                    'update'            => 'Update',
                    'update-filter'     => 'Update Filter',
                    'updated-success'   => 'Filter has been updated successfully.',
                ],

                'search' => [
                    'title' => 'Search',
                ],
            ],

            'filters' => [
                'select' => 'Select',
                'title'  => 'Filters',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'Type at least 2 characters...',
                        'no-results'         => 'No result found...',
                    ],
                ],

                'custom-filters' => [
                    'clear-all' => 'Clear All',
                    'title'     => 'Custom Filters',
                ],

                'boolean-options' => [
                    'false' => 'False',
                    'true'  => 'True',
                ],

                'date-options' => [
                    'last-month'        => 'Last Month',
                    'last-six-months'   => 'Last 6 Months',
                    'last-three-months' => 'Last 3 Months',
                    'this-month'        => 'This Month',
                    'this-week'         => 'This Week',
                    'this-year'         => 'This Year',
                    'today'             => 'Today',
                    'yesterday'         => 'Yesterday',
                ],
            ],

            'table' => [
                'actions'              => 'Actions',
                'no-records-available' => 'No Records Available.',
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn'    => 'Agree',
                'disagree-btn' => 'Disagree',
                'message'      => 'Are you sure you want to perform this action?',
                'title'        => 'Are you sure?',
            ],
        ],

        'tags' => [
            'index' => [
                'title'          => 'Tags',
                'added-tags'     => 'Added Tags',
                'save-btn'       => 'Save Tag',
                'placeholder'    => 'Type to search tags',
                'add-tag'        => 'Add \":term\"...',
                'aquarelle-red'  => 'Aquarelle Red',
                'crushed-cashew' => 'Crushed Cashew',
                'beeswax'        => 'Beeswax',
                'lemon-chiffon'  => 'Lemon Chiffon',
                'snow-flurry'    => 'Snow Flurry',
                'honeydew'       => 'Honeydew',
            ],
        ],

        'layouts' => [
            'header' => [
                'mega-search' => [
                    'title'   => 'Search',

                    'tabs' => [
                        'leads'    => 'Leads',
                        'quotes'   => 'Quotes',
                        'persons'  => 'Persons',
                        'products' => 'Products',
                    ],

                    'explore-all-products'          => 'Explore all Products',
                    'explore-all-leads'             => 'Explore all Leads',
                    'explore-all-contacts'          => 'Explore all Contacts',
                    'explore-all-quotes'            => 'Explore all Quotes',
                    'explore-all-matching-products' => 'Explore all products matching ":query" (:count)',
                    'explore-all-matching-leads'    => 'Explore all leads matching ":query" (:count)',
                    'explore-all-matching-contacts' => 'Explore all contacts matching ":query" (:count)',
                    'explore-all-matching-quotes'   => 'Explore all quotes matching ":query" (:count)',
                ],
            ],
        ],

        'attributes' => [
            'lookup' => [
                'click-to-add'    => 'Click to add',
                'search'          => 'Search',
                'no-result-found' => 'No result found',
            ],
        ],
    ],

    'quotes' => [
        'index' => [
            'title'          => 'Quotes',
            'create-btn'     => 'Create Quote',
            'create-success' => 'Quote created successfully.',
            'update-success' => 'Quote updated successfully.',
            'delete-success' => 'Quote deleted successfully.',
            'delete-failed'  => 'Quote can not be deleted.',

            'datagrid' => [
                'subject'        => 'Subject',
                'sales-person'   => 'Sales Person',
                'expired-at'     => 'Expired At',
                'created-at'     => 'Created At',
                'expired-quotes' => 'Expired Quote',
                'person'         => 'Person',
                'subtotal'       => 'Subtotal',
                'discount'       => 'Discount',
                'tax'            => 'Tax',
                'adjustment'     => 'Adjustment',
                'grand-total'    => 'Grand Total',
                'edit'           => 'Edit',
                'delete'         => 'Delete',
                'print'          => 'Print',
            ],

            'pdf' => [
                'title'            => 'Quote',
                'grand-total'      => 'Grand Total',
                'adjustment'       => 'Adjustment',
                'discount'         => 'Discount',
                'tax'              => 'Tax',
                'sub-total'        => 'Sub Total',
                'amount'           => 'Amount',
                'quantity'         => 'Quantity',
                'price'            => 'Price',
                'product-name'     => 'Product Name',
                'sku'              => 'SKU',
                'shipping-address' => 'Shipping Address',
                'billing-address'  => 'Billing Address',
                'expired-at'       => 'Expired At',
                'sales-person'     => 'Sales Person',
                'date'             => 'Date',
                'quote-id'         => 'Quote ID',
            ],
        ],

        'create' => [
            'title'             => 'Create Quote',
            'save-btn'          => 'Save Quote',
            'quote-info'        => 'Quote Information',
            'quote-info-info'   => 'Put the basic information of the quote.',
            'address-info'      => 'Address Information',
            'address-info-info' => 'Information about the address related to quote.',
            'quote-items'       => 'Quote Items',
            'search-products'   => 'Search Products',
            'link-to-lead'      => 'Link to lead',
            'quote-item-info'   => 'Add Product Request for this quote.',
            'quote-name'        => 'Quote name',
            'quantity'          => 'Quantity',
            'price'             => 'Price',
            'discount'          => 'Discount',
            'tax'               => 'Tax',
            'total'             => 'Total',
            'amount'            => 'Amount',
            'add-item'          => '+ Add Item',
            'sub-total'         => 'Sub Total (:symbol)',
            'total-discount'    => 'Discount (:symbol)',
            'total-tax'         => 'Tax (:symbol)',
            'total-adjustment'  => 'Adjustment (:symbol)',
            'grand-total'       => 'Grant Total (:symbol)',
            'discount-amount'   => 'Discount amount',
            'tax-amount'        => 'Tax amount',
            'adjustment-amount' => 'Adjustment amount',
            'product-name'      => 'Product Name',
            'action'            => 'Action',
        ],

        'edit' => [
            'title'             => 'Edit Quote',
            'save-btn'          => 'Save Quote',
            'save-btn'          => 'Save Quotes',
            'quote-info'        => 'Quote Information',
            'quote-info-info'   => 'Put the basic information of the quote.',
            'address-info'      => 'Address Information',
            'address-info-info' => 'Information about the address related to quote.',
            'quote-items'       => 'Quote Items',
            'link-to-lead'      => 'Link to lead',
            'quote-item-info'   => 'Add Product Request for this quote.',
            'quote-name'        => 'Quote name',
            'quantity'          => 'Quantity',
            'price'             => 'Price',
            'search-products'   => 'Search Products',
            'discount'          => 'Discount',
            'tax'               => 'Tax',
            'total'             => 'Total',
            'amount'            => 'Amount',
            'add-item'          => '+ Add Item',
            'sub-total'         => 'Sub Total (:symbol)',
            'total-discount'    => 'Discount (:symbol)',
            'total-tax'         => 'Tax (:symbol)',
            'total-adjustment'  => 'Adjustment (:symbol)',
            'grand-total'       => 'Grant Total (:symbol)',
            'discount-amount'   => 'Discount amount',
            'tax-amount'        => 'Tax amount',
            'adjustment-amount' => 'Adjustment amount',
            'product-name'      => 'Product Name',
            'action'            => 'Action',
        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => 'Persons',
                'create-btn'     => 'Create Person',
                'create-success' => 'Person created successfully.',
                'update-success' => 'Person updated successfully.',
                'delete-success' => 'Person deleted successfully.',
                'delete-failed'  => 'Person can not be deleted.',

                'datagrid' => [
                    'contact-numbers'   => 'Contact Numbers',
                    'delete'            => 'Delete',
                    'edit'              => 'Edit',
                    'emails'            => 'Emails',
                    'id'                => 'ID',
                    'view'              => 'View',
                    'name'              => 'Name',
                    'organization-name' => 'Organization Name',
                ],
            ],

            'view' => [
                'title'        => ':name',
                'about-person' => 'About Person',

                'activities' => [
                    'index' => [
                        'all'          => 'All',
                        'calls'        => 'Calls',
                        'meetings'     => 'Meetings',
                        'lunches'      => 'Lunches',
                        'files'        => 'Files',
                        'quotes'       => 'Quotes',
                        'notes'        => 'Notes',
                        'emails'       => 'Emails',
                        'by-user'      => 'By :user',
                        'scheduled-on' => 'Scheduled on',
                        'location'     => 'Location',
                        'participants' => 'Participants',
                        'mark-as-done' => 'Mark as Done',
                        'delete'       => 'Delete',
                        'edit'         => 'Edit',
                    ],

                    'actions' => [
                        'mail' => [
                            'btn'      => 'Mail',
                            'title'    => 'Compose Mail',
                            'to'       => 'To',
                            'cc'       => 'CC',
                            'bcc'      => 'BCC',
                            'subject'  => 'Subject',
                            'send-btn' => 'Send',
                            'message'  => 'Message',
                        ],

                        'file' => [
                            'btn'           => 'File',
                            'title'         => 'Add File',
                            'title-control' => 'Title',
                            'name'          => 'File Name',
                            'description'   => 'Description',
                            'file'          => 'File',
                            'save-btn'      => 'Save File',
                        ],

                        'note' => [
                            'btn'      => 'Note',
                            'title'    => 'Add Note',
                            'comment'  => 'Comment',
                            'save-btn' => 'Save Note',
                        ],

                        'activity' => [
                            'btn'           => 'Activity',
                            'title'         => 'Add Activity',
                            'title-control' => 'Title',
                            'description'   => 'Description',
                            'schedule-from' => 'Schedule From',
                            'schedule-to'   => 'Schedule To',
                            'location'      => 'Location',
                            'call'          => 'Call',
                            'meeting'       => 'Meeting',
                            'lunch'         => 'Lunch',
                            'save-btn'      => 'Save Activity',
                        ],
                    ],
                ],
            ],

            'create' => [
                'title'    => 'Create Person',
                'save-btn' => 'Save Person',
            ],

            'edit' => [
                'title'    => 'Edit Person',
                'save-btn' => 'Save Person',
            ],
        ],

        'organizations' => [
            'index' => [
                'title'          => 'Organizations',
                'create-btn'     => 'Create Organization',
                'create-success' => 'Organization created successfully.',
                'update-success' => 'Organization updated successfully.',
                'delete-success' => 'Organization deleted successfully.',
                'delete-failed'  => 'Organization can not be deleted.',

                'datagrid' => [
                    'delete'        => 'Delete',
                    'edit'          => 'Edit',
                    'id'            => 'ID',
                    'name'          => 'Name',
                    'persons-count' => 'Person Count',
                ],
            ],

            'create' => [
                'title'    => 'Create Organization',
                'save-btn' => 'Save Organization',
            ],

            'edit' => [
                'title'    => 'Edit Organization',
                'save-btn' => 'Save Organization',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title'          => 'Products',
            'create-btn'     => 'Create Product',
            'create-success' => 'Product created successfully.',
            'update-success' => 'Product updated successfully.',
            'delete-success' => 'Product deleted successfully.',
            'delete-failed'  => 'Product can not be deleted.',

            'datagrid'   => [
                'allocated' => 'Allocated',
                'delete'    => 'Delete',
                'edit'      => 'Edit',
                'id'        => 'ID',
                'in-stock'  => 'In Stock',
                'name'      => 'Name',
                'on-hand'   => 'On Hand',
                'price'     => 'Price',
                'sku'       => 'SKU',
                'view'      => 'View',
            ],
        ],

        'create' => [
            'save-btn'  => 'Save Products',
            'title'     => 'Create Products',
            'general'   => 'General',
            'price'     => 'Price',
        ],

        'edit' => [
            'title'     => 'Edit Products',
            'save-btn'  => 'Save Products',
            'general'   => 'General',
            'price'     => 'Price',
        ],

        'view' => [
            'sku'         => 'SKU',
            'all'         => 'All',
            'notes'       => 'Notes',
            'files'       => 'Files',
            'inventories' => 'Inventory',

            'attributes' => [
                'about-product' => 'About Product',
            ],

            'inventory' => [
                'source'     => 'Source',
                'in-stock'   => 'In Stock',
                'allocated'  => 'Allocated',
                'on-hand'    => 'On Hand',
                'actions'    => 'Actions',
                'assign'     => 'Assign',
                'add-source' => 'Add Source',
                'location'   => 'Location',
                'add-more'   => 'Add More',
                'save'       => 'Save',
            ],
        ],
    ],

    'settings' => [
        'title' => 'Settings',

        'groups' => [
            'index' => [
                'create-btn'        => 'Create Group',
                'title'             => 'Groups',
                'create-success'    => 'Group created successfully.',
                'update-success'    => 'Group updated successfully.',
                'destroy-success'   => 'Group deleted successfully.',
                'delete-failed'     => 'Group can not be deleted.',

                'datagrid'   => [
                    'delete'      => 'Delete',
                    'description' => 'Description',
                    'edit'        => 'Edit',
                    'id'          => 'ID',
                    'name'        => 'Name',
                ],

                'edit' => [
                    'title' => 'Edit Group',
                ],

                'create' => [
                    'name'        => 'Name',
                    'title'       => 'Create Group',
                    'description' => 'Description',
                    'save-btn'    => 'Save Group',
                ],
            ],
        ],

        'roles' => [
            'index' => [
                'being-used'                => 'Role can not be deleted, as this is being used in admin user.',
                'create-btn'                => 'Create Roles',
                'create-success'            => 'Role created successfully.',
                'current-role-delete-error' => 'Can not delete role assigned to the current user.',
                'delete-failed'             => 'Role can not be deleted.',
                'delete-success'            => 'Role deleted successfully.',
                'last-delete-error'         => 'At least one role is required.',
                'settings'                  => 'Settings',
                'title'                     => 'Roles',
                'update-success'            => 'Role updated successfully.',
                'user-define-error'         => 'Can not delete system role.',

                'datagrid'   => [
                    'all'             => 'All',
                    'custom'          => 'Custom',
                    'delete'          => 'Delete',
                    'description'     => 'Description',
                    'edit'            => 'Edit',
                    'id'              => 'ID',
                    'name'            => 'Name',
                    'permission-type' => 'Permission Type',
                ],
            ],

            'create' => [
                'access-control' => 'Access Control',
                'all'            => 'All',
                'back-btn'       => 'Back',
                'custom'         => 'Custom',
                'description'    => 'Description',
                'general'        => 'General',
                'name'           => 'Name',
                'permissions'    => 'Permissions',
                'save-btn'       => 'Save Role',
                'title'          => 'Create Role',
            ],

            'edit' => [
                'access-control' => 'Access Control',
                'all'            => 'All',
                'back-btn'       => 'Back',
                'custom'         => 'Custom',
                'description'    => 'Description',
                'general'        => 'General',
                'name'           => 'Name',
                'permissions'    => 'Permissions',
                'save-btn'       => 'Save Role',
                'title'          => 'Edit Role',
            ],
        ],

        'types' => [
            'index' => [
                'create-btn'     => 'Create Type',
                'create-success' => 'Type created successfully.',
                'delete-failed'  => 'Type can not be deleted.',
                'delete-success' => 'Type deleted successfully.',
                'title'          => 'Types',
                'update-success' => 'Type updated successfully.',

                'datagrid' => [
                    'delete'      => 'Delete',
                    'description' => 'Description',
                    'edit'        => 'Edit',
                    'id'          => 'ID',
                    'name'        => 'Name',
                ],

                'create' => [
                    'name'     => 'Name',
                    'save-btn' => 'Save Type',
                    'title'    => 'Create Type',
                ],

                'edit' => [
                    'title' => 'Edit Type',
                ],
            ],
        ],

        'sources' => [
            'index' => [
                'create-btn'     => 'Create Source',
                'create-success' => 'Source created successfully.',
                'delete-failed'  => 'Source can not be deleted.',
                'delete-success' => 'Source deleted successfully.',
                'title'          => 'Sources',
                'update-success' => 'Source updated successfully.',

                'datagrid' => [
                    'delete' => 'Delete',
                    'edit'   => 'Edit',
                    'id'     => 'ID',
                    'name'   => 'Name',
                ],

                'create' => [
                    'name'     => 'Name',
                    'save-btn' => 'Save Type',
                    'title'    => 'Create Type',
                ],

                'edit' => [
                    'title' => 'Edit Type',
                ],
            ],
        ],

        'workflows' => [
            'index' => [
                'title'          => 'Workflows',
                'create-btn'     => 'Create Workflow',
                'create-success' => 'Workflow created successfully.',
                'update-success' => 'Workflow updated successfully.',
                'delete-success' => 'Workflow deleted successfully.',
                'delete-failed'  => 'Workflow can not be deleted.',
                'datagrid'       => [
                    'delete'      => 'Delete',
                    'description' => 'Description',
                    'edit'        => 'Edit',
                    'id'          => 'ID',
                    'name'        => 'Name',
                ],
            ],

            'create' => [
                'title'                  => 'Create Workflow',
                'event'                  => 'Event',
                'back-btn'               => 'Back',
                'save-btn'               => 'Save Workflow',
                'general'                => 'General',
                'name'                   => 'Name',
                'description'            => 'Description',
                'conditions'             => 'Conditions',
                'value'                  => 'Value',
                'condition-type'         => 'Condition Type',
                'all-condition-are-true' => 'All condition are true',
                'any-condition-are-true' => 'Any condition are true',
                'add-condition'          => 'Add Condition',
                'add-action'             => 'Add Action',
                'yes'                    => 'Yes',
                'no'                     => 'No',
                'email'                  => 'Email',
                'is-equal-to'            => 'Is equal to',
                'is-not-equal-to'        => 'Is not equal to',
                'equals-or-greater-than' => 'Equals or greater than',
                'equals-or-less-than'    => 'Equals or less than',
                'greater-than'           => 'Greater than',
                'less-than'              => 'Less than',
                'contain'                => 'Contain',
                'contains'               => 'Contains',
                'does-not-contain'       => 'Does not contain',
                'helper'                 => [
                    'update-related-leads'       => 'Update related leads',
                    'send-email-to-sales-owner'  => 'Send email to sales owner',
                    'send-email-to-participants' => 'Send email to participants',
                    'add-webhook'                => 'Add Webhook',
                ],
            ],

            'edit' => [
                'title'                  => 'Edit Workflow',
                'event'                  => 'Event',
                'back-btn'               => 'Back',
                'save-btn'               => 'Save Workflow',
                'general'                => 'General',
                'name'                   => 'Name',
                'description'            => 'Description',
                'conditions'             => 'Conditions',
                'value'                  => 'Value',
                'all-condition-are-true' => 'All condition are true',
                'any-condition-are-true' => 'Any condition are true',
                'condition-type'         => 'Condition Type',
                'add-condition'          => 'Add Condition',
                'add-action'             => 'Add Action',
                'yes'                    => 'Yes',
                'no'                     => 'No',
                'email'                  => 'Email',
                'is-equal-to'            => 'Is equal to',
                'is-not-equal-to'        => 'Is not equal to',
                'equals-or-greater-than' => 'Equals or greater than',
                'equals-or-less-than'    => 'Equals or less than',
                'greater-than'           => 'Greater than',
                'less-than'              => 'Less than',
                'contain'                => 'Contain',
                'contains'               => 'Contains',
                'does-not-contain'       => 'Does not contain',
                'helper'                 => [
                    'update-related-leads'       => 'Update related leads',
                    'send-email-to-sales-owner'  => 'Send email to sales owner',
                    'send-email-to-participants' => 'Send email to participants',
                    'add-webhook'                => 'Add Webhook',
                    'update-lead'                => 'Update Lead',
                    'update-person'              => 'Update Person',
                    'send-email-to-person'       => 'Send email to person',
                    'add-tag'                    => 'Add Tag',
                    'add-note-as-activity'       => 'Add Note as Activity',
                    'get-method'                 => 'Get Method',
                    'post-method'                => 'Post Method',
                    'put-method'                 => 'Put Method',
                    'delete-method'              => 'Delete Method',
                    'patch-method'               => 'Patch Method',
                    'encoding-json'              => 'Encoding JSON',
                    'encoding-http-query'        => 'Encoding HTTP Query',
                ],
            ],
        ],

        'webforms' => [
            'index' => [
                'title'          => 'Webforms',
                'create-btn'     => 'Create Webform',
                'create-success' => 'Webform created successfully.',
                'update-success' => 'Webform updated successfully.',
                'delete-success' => 'Webform deleted successfully.',
                'delete-failed'  => 'Webform can not be deleted.',

                'datagrid'       => [
                    'id'     => 'ID',
                    'title'  => 'Title',
                    'edit'   => 'Edit',
                    'delete' => 'Delete',
                ],
            ],

            'create' => [
                'title'                    => 'Create Webform',
                'save-btn'                 => 'Save Webform',
                'submit-success-action'    => 'Submit Success Action',
                'general'                  => 'General',
                'create-lead'              => 'Create Lead',
                'customize-webform'        => 'Customize Webform',
                'customize-webform-info'   => 'Customize your web form with element colors of your choosing.',
                'backgroud-color'          => 'Background Color',
                'form-backgroud-color'     => 'Form Background Color',
                'form-title-color'         => 'Form Title Color',
                'form-submit-btn-color'    => 'Form Submit Button Color',
                'attribute-label-color'    => 'Attribute Label Color',
                'attributes'               => 'Attributes',
                'attributes-info'          => 'Add custom attributes to the form.',
                'add-attribute-btn'        => 'Add Attribute Button',
                'description'              => 'Description',
                'submit-button-label'      => 'Submit Button Label',
                'form-background-color'    => 'Form Background Color',
                'form-submit-button-color' => 'Form Submit Button Color',
                'display-custom-message'   => 'Display custom message',
            ],

            'edit' => [
                'title'                    => 'Edit Webform',
                'embed'                    => 'Embed',
                'preview'                  => 'Preview',
                'save-btn'                 => 'Save Webform',
                'submit-success-action'    => 'Submit Success Action',
                'general'                  => 'General',
                'create-lead'              => 'Create Lead',
                'customize-webform'        => 'Customize Webform',
                'customize-webform-info'   => 'Customize your web form with element colors of your choosing.',
                'backgroud-color'          => 'Background Color',
                'form-backgroud-color'     => 'Form Background Color',
                'form-title-color'         => 'Form Title Color',
                'form-background-color'    => 'Form Background Color',
                'form-submit-btn-color'    => 'Form Submit Button Color',
                'attribute-label-color'    => 'Attribute Label Color',
                'attributes'               => 'Attributes',
                'attributes-info'          => 'Add custom attributes to the form.',
                'add-attribute-btn'        => 'Add Attribute Button',
                'description'              => 'Description',
                'submit-button-label'      => 'Submit Button Label',
                'redirect-to-url'          => 'Redirect To URL',
                'copied'                   => 'Copied',
                'copy'                     => 'Copy',
                'public-url'               => 'Public URL',
                'code-snippet'             => 'Code Snippet',
                'form-submit-button-color' => 'Form Submit Button Color',
                'display-custom-message'   => 'Display custom message',
            ],
        ],

        'email-template' => [
            'index' => [
                'create-btn'     => 'Create Email Template',
                'title'          => 'Email Templates',
                'create-success' => 'Email Template created successfully.',
                'update-success' => 'Email Template updated successfully.',
                'delete-success' => 'Email Template deleted successfully.',
                'delete-failed'  => 'Email Template can not be deleted.',

                'datagrid'   => [
                    'delete'       => 'Delete',
                    'edit'         => 'Edit',
                    'id'           => 'ID',
                    'name'         => 'Name',
                    'subject'      => 'Subject',
                ],
            ],

            'create'     => [
                'title'                => 'Create Email Template',
                'save-btn'             => 'Save Email Template',
                'email-template'       => 'Email Template',
                'subject'              => 'Subject',
                'content'              => 'Content',
                'subject-placeholders' => 'Subject Placeholders',
                'general'              => 'General',
                'name'                 => 'Name',
            ],

            'edit' => [
                'title'                => 'Edit Email Template',
                'save-btn'             => 'Save Email Template',
                'email-template'       => 'Email Template',
                'subject'              => 'Subject',
                'content'              => 'Content',
                'subject-placeholders' => 'Subject Placeholders',
                'general'              => 'General',
                'name'                 => 'Name',
            ],
        ],

        'tags' => [
            'index' => [
                'create-btn'     => 'Create Tag',
                'title'          => 'Tags',
                'create-success' => 'Tag created successfully.',
                'update-success' => 'Tag updated successfully.',
                'delete-success' => 'Tag deleted successfully.',
                'delete-failed'  => 'Tag can not be deleted.',

                'datagrid' => [
                    'delete'      => 'Delete',
                    'edit'        => 'Edit',
                    'id'          => 'ID',
                    'name'        => 'Name',
                    'users'       => 'Users',
                    'created-at'  => 'Created At',
                ],

                'create' => [
                    'name'     => 'Name',
                    'save-btn' => 'Save Tag',
                    'title'    => 'Create Tag',
                    'color'    => 'Color',
                ],

                'edit' => [
                    'title' => 'Edit Tag',
                ],
            ],
        ],

        'users' => [
            'index' => [
                'create-btn'          => 'Create User',
                'create-success'      => 'User created successfully.',
                'delete-failed'       => 'User can not be deleted.',
                'delete-success'      => 'User deleted successfully.',
                'last-delete-error'   => 'At least one user is required.',
                'mass-delete-failed'  => 'Users can not be deleted.',
                'mass-delete-success' => 'Users deleted successfully.',
                'mass-update-failed'  => 'Users can not be updated.',
                'mass-update-success' => 'Users updated successfully.',
                'title'               => 'Users',
                'update-success'      => 'User updated successfully.',
                'user-define-error'   => 'Can not delete system user.',
                'active'              => 'Active',
                'inactive'            => 'Inactive',

                'datagrid' => [
                    'active'        => 'Active',
                    'created-at'    => 'Created At',
                    'delete'        => 'Delete',
                    'edit'          => 'Edit',
                    'email'         => 'Email',
                    'id'            => 'ID',
                    'inactive'      => 'Inactive',
                    'name'          => 'Name',
                    'status'        => 'Status',
                    'update-status' => 'Update Status',
                    'users'         => 'Users',
                ],

                'create' => [
                    'confirm-password' => 'Confirm Password',
                    'email'            => 'Email',
                    'general'          => 'General',
                    'global'           => 'Global',
                    'group'            => 'Group',
                    'individual'       => 'Individual',
                    'name'             => 'Name',
                    'password'         => 'Password',
                    'permission'       => 'Permission',
                    'role'             => 'Role',
                    'save-btn'         => 'Save User',
                    'status'           => 'Status',
                    'title'            => 'Create User',
                    'view-permission'  => 'View Permission',
                ],

                'edit' => [
                    'title' => 'Edit User',
                ],
            ],
        ],

        'pipelines' => [
            'index' => [
                'title'                => 'Pipelines',
                'create-btn'           => 'Create Pipeline',
                'create-success'       => 'Pipeline created successfully.',
                'update-success'       => 'Pipeline updated successfully.',
                'delete-success'       => 'Pipeline deleted successfully.',
                'delete-failed'        => 'Pipeline can not be deleted.',
                'default-delete-error' => 'Default pipeline can not be deleted.',

                'datagrid' => [
                    'delete'      => 'Delete',
                    'edit'        => 'Edit',
                    'id'          => 'ID',
                    'is-default'  => 'Is Default',
                    'name'        => 'Name',
                    'no'          => 'No',
                    'rotten-days' => 'Rotten Days',
                    'yes'         => 'Yes',
                ],
            ],

            'create' => [
                'title'           => 'Create Pipeline',
                'save-btn'        => 'Save Pipeline',
                'name'            => 'Name',
                'rotten-days'     => 'Rotten Days',
                'mark-as-default' => 'Mark as Default',
                'general'         => 'General',
                'probability'     => 'Probability(%)',
                'new-stage'       => 'New',
                'won-stage'       => 'Won',
                'lost-stage'      => 'Lost',
                'stage-btn'       => 'Add Stage',
                'stages'          => 'Stages',
                'duplicate-name'  => 'The "Name" field cannot be duplicate',
                'delete-stage'    => 'Delete Stage',
                'add-new-stages'  => 'Add New Stages',
                'add-stage-info'  => 'Add new stage for your Pipeline',
                'newly-added'     => 'Newly Added',
            ],

            'edit'  => [
                'title'           => 'Edit Pipeline',
                'save-btn'        => 'Save Pipeline',
                'name'            => 'Name',
                'rotten-days'     => 'Rotten Days',
                'mark-as-default' => 'Mark as Default',
                'general'         => 'General',
                'probability'     => 'Probability(%)',
                'new-stage'       => 'New',
                'won-stage'       => 'Won',
                'lost-stage'      => 'Lost',
                'stage-btn'       => 'Add Stage',
                'stages'          => 'Stages',
                'duplicate-name'  => 'The "Name" field cannot be duplicate',
                'delete-stage'    => 'Delete Stage',
                'add-new-stages'  => 'Add New Stages',
                'add-stage-info'  => 'Add new stage for your Pipeline',
            ],
        ],

        'webhooks' => [
            'index' => [
                'title'          => 'Webhooks',
                'create-btn'     => 'Create Webhook',
                'create-success' => 'Webhook created successfully.',
                'update-success' => 'Webhook updated successfully.',
                'delete-success' => 'Webhook deleted successfully.',
                'delete-failed'  => 'Webhook can not be deleted.',

                'datagrid' => [
                    'id'          => 'ID',
                    'delete'      => 'Delete',
                    'edit'        => 'Edit',
                    'name'        => 'Name',
                    'entity-type' => 'Entity Type',
                    'end-point'   => 'End Point',
                ],
            ],

            'create' => [
                'title'                 => 'Create Webhook',
                'save-btn'              => 'Save Webhook',
                'info'                  => 'Enter the details of webhooks',
                'url-and-parameters'    => 'URL And Parameters',
                'method'                => 'Method',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'Url Endpoint',
                'parameters'            => 'Parameters',
                'add-new-parameter'     => 'Add New Parameter',
                'url-preview'           => 'Url Preview:',
                'headers'               => 'Headers',
                'add-new-header'        => 'Add New Header',
                'body'                  => 'Body',
                'default'               => 'Default',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'raw'                   => 'Raw',
                'general'               => 'General',
                'name'                  => 'Name',
                'entity-type'           => 'Entity Type',
                'insert-placeholder'    => 'Insert Placeholder',
                'description'           => 'Description',
                'json'                  => 'Json',
                'text'                  => 'Text',
            ],

            'edit' => [
                'title'                 => 'Edit Webhook',
                'edit-btn'              => 'Save Webhook',
                'save-btn'              => 'Save Webhook',
                'info'                  => 'Enter the details of webhooks',
                'url-and-parameters'    => 'URL And Parameters',
                'method'                => 'Method',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'Url Endpoint',
                'parameters'            => 'Parameters',
                'add-new-parameter'     => 'Add New Parameter',
                'url-preview'           => 'Url Preview:',
                'headers'               => 'Headers',
                'add-new-header'        => 'Add New Header',
                'body'                  => 'Body',
                'default'               => 'Default',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'raw'                   => 'Raw',
                'general'               => 'General',
                'name'                  => 'Name',
                'entity-type'           => 'Entity Type',
                'insert-placeholder'    => 'Insert Placeholder',
                'description'           => 'Description',
                'json'                  => 'Json',
                'text'                  => 'Text',
            ],
        ],

        'warehouses' => [
            'index' => [
                'title'          => 'Warehouses',
                'create-btn'     => 'Create Warehouse',
                'create-success' => 'Warehouse created successfully.',
                'name-exists'    => 'Warehouse name already exists.',
                'update-success' => 'Warehouse updated successfully.',
                'delete-success' => 'Warehouse deleted successfully.',
                'delete-failed'  => 'Warehouse can not be deleted.',

                'datagrid' => [
                    'id'              => 'ID',
                    'name'            => 'Name',
                    'contact-name'    => 'Contact Name',
                    'delete'          => 'Delete',
                    'edit'            => 'Edit',
                    'view'            => 'View',
                    'created-at'      => 'Created At',
                    'products'        => 'Products',
                    'contact-emails'  => 'Contact Emails',
                    'contact-numbers' => 'Contact Numbers',
                ],
            ],

            'create' => [
                'title'         => 'Create Warehouse',
                'save-btn'      => 'Save Warehouse',
                'contact-info'  => 'Contact Information',
            ],

            'edit' => [
                'title'         => 'Edit Warehouse',
                'save-btn'      => 'Save Warehouse',
                'contact-info'  => 'Contact Information',
            ],

            'view' => [
                'all'          => 'All',
                'notes'        => 'Notes',
                'files'        => 'Files',
                'location'     => 'Location',

                'locations' => [
                    'action'         => 'Action',
                    'add-location'   => 'Add Location',
                    'create-success' => 'Location created successfully.',
                    'delete'         => 'Delete',
                    'delete-failed'  => 'Location can not be deleted.',
                    'delete-success' => 'Location deleted successfully.',
                    'name'           => 'Name',
                    'save-btn'       => 'Save',
                ],

                'general-information' => [
                    'title' => 'General Information',
                ],

                'contact-information' => [
                    'title' => 'Contact Information',
                ],
            ],
        ],

        'attributes' => [
            'index' => [
                'title'              => 'Attributes',
                'create-btn'         => 'Create Attribute',
                'create-success'     => 'Attributes created successfully.',
                'update-success'     => 'Attributes updated successfully.',
                'delete-success'     => 'Attributes deleted successfully.',
                'delete-failed'      => 'Attributes can not be deleted.',
                'user-define-error'  => 'Can not delete system attribute.',
                'mass-delete-failed' => 'System attributes can not be deleted.',

                'datagrid' => [
                    'yes'         => 'Yes',
                    'no'          => 'No',
                    'id'          => 'ID',
                    'code'        => 'Code',
                    'name'        => 'Name',
                    'entity-type' => 'Entity Type',
                    'type'        => 'Type',
                    'is-default'  => 'Is Default',
                    'edit'        => 'Edit',
                    'delete'      => 'Delete',
                ],
            ],

            'create'  => [
                'title'                 => 'Create Attribute',
                'save-btn'              => 'Save Attribute',
                'code'                  => 'Code',
                'name'                  => 'Name',
                'entity-type'           => 'Entity Type',
                'type'                  => 'Type',
                'validations'           => 'Validations',
                'is-required'           => 'Is Required',
                'input-validation'      => 'Input Validation',
                'is-unique'             => 'Is Unique',
                'labels'                => 'Labels',
                'general'               => 'General',
                'numeric'               => 'Numeric',
                'decimal'               => 'Decimal',
                'url'                   => 'Url',
                'options'               => 'Options',
                'option-type'           => 'Option Type',
                'lookup-type'           => 'Lookup Type',
                'add-option'            => 'Add Option',
                'save-option'           => 'Save Option',
                'option-name'           => 'Option Name',
                'add-attribute-options' => 'Add Attribute Options',
                'text'                  => 'Text',
                'textarea'              => 'Textarea',
                'price'                 => 'Price',
                'boolean'               => 'Boolean',
                'select'                => 'Select',
                'multiselect'           => 'Multiselect',
                'email'                 => 'Email',
                'address'               => 'Address',
                'phone'                 => 'Phone',
                'datetime'              => 'Datetime',
                'date'                  => 'Date',
                'image'                 => 'Image',
                'file'                  => 'File',
                'lookup'                => 'Lookup',
                'entity_type'           => 'Entity type',
                'checkbox'              => 'Checkbox',
                'is_required'           => 'Is Required',
                'is_unique'             => 'Is Unique',
            ],

            'edit'  => [
                'title'                 => 'Edit Attribute',
                'save-btn'              => 'Save Attribute',
                'code'                  => 'Code',
                'name'                  => 'Name',
                'labels'                => 'Labels',
                'entity-type'           => 'Entity Type',
                'type'                  => 'Type',
                'validations'           => 'Validations',
                'is-required'           => 'Is Required',
                'input-validation'      => 'Input Validation',
                'is-unique'             => 'Is Unique',
                'general'               => 'General',
                'numeric'               => 'Numeric',
                'decimal'               => 'Decimal',
                'url'                   => 'Url',
                'options'               => 'Options',
                'option-type'           => 'Option Type',
                'lookup-type'           => 'Lookup Type',
                'add-option'            => 'Add Option',
                'save-option'           => 'Save Option',
                'option-name'           => 'Option Name',
                'add-attribute-options' => 'Add Attribute Options',
                'text'                  => 'Text',
                'textarea'              => 'Textarea',
                'price'                 => 'Price',
                'boolean'               => 'Boolean',
                'select'                => 'Select',
                'multiselect'           => 'Multiselect',
                'email'                 => 'Email',
                'address'               => 'Address',
                'phone'                 => 'Phone',
                'datetime'              => 'Datetime',
                'date'                  => 'Date',
                'image'                 => 'Image',
                'file'                  => 'File',
                'lookup'                => 'Lookup',
                'entity_type'           => 'Entity type',
                'checkbox'              => 'Checkbox',
                'is_required'           => 'Is Required',
                'is_unique'             => 'Is Unique',
            ],
        ],
    ],

    'activities' => [
        'index' => [
            'title'      => 'Activities',

            'datagrid' => [
                'comment'       => 'Comment',
                'created_at'    => 'Created At',
                'created_by'    => 'Created By',
                'edit'          => 'Edit',
                'id'            => 'ID',
                'done'          => 'Is Done',
                'not-done'      => 'Not Done',
                'lead'          => 'Lead',
                'mass-delete'   => 'Mass Delete',
                'mass-update'   => 'Mass Update',
                'schedule-from' => 'Schedule From',
                'schedule-to'   => 'Schedule To',
                'schedule_from' => 'Schedule From',
                'schedule_to'   => 'Schedule To',
                'title'         => 'Title',
                'is_done'       => 'Is Done',
                'type'          => 'Type',
                'update'        => 'Update',
                'call'          => 'Call',
                'meeting'       => 'Meeting',
                'lunch'         => 'Lunch',
            ],
        ],

        'edit' => [
            'title'           => 'Edit Activity',
            'back-btn'        => 'Back',
            'save-btn'        => 'Save Activity',
            'type'            => 'Activity Type',
            'call'            => 'Call',
            'meeting'         => 'Meeting',
            'lunch'           => 'Lunch',
            'schedule_to'     => 'Schedule To',
            'schedule_from'   => 'Schedule From',
            'location'        => 'Location',
            'comment'         => 'Comment',
            'lead'            => 'Lead',
            'participants'    => 'Participants',
            'general'         => 'General',
            'persons'         => 'Persons',
            'no-result-found' => 'Records not found.',
            'users'           => 'Users',
        ],

        'duration-overlapping' => 'Participants have another meeting at this time. Do you want to continue?',
        'create-success'       => 'Activity created successfully.',
        'update-success'       => 'Activity updated successfully.',
        'mass-update-success'  => 'Activities updated successfully.',
        'destroy-success'      => 'Activity deleted successfully.',
        'delete-failed'        => 'Activity can not be deleted.',
    ],

    'mail' => [
        'index' => [
            'compose'           => 'Compose',
            'draft'             => 'Draft',
            'inbox'             => 'Inbox',
            'outbox'            => 'Outbox',
            'sent'              => 'Sent',
            'trash'             => 'Trash',
            'composer-mail-btn' => 'Composer Mail',
            'btn'               => 'Mail',
            'mail'              => [
                'title'         => 'Compose Mail',
                'to'            => 'To',
                'enter-emails'  => 'Press enter to add emails',
                'cc'            => 'CC',
                'bcc'           => 'BCC',
                'subject'       => 'Subject',
                'send-btn'      => 'Send',
                'message'       => 'Message',
                'draft'         => 'Draft',
            ],

            'datagrid' => [
                'id'            => 'ID',
                'from'          => 'From',
                'to'            => 'To',
                'subject'       => 'Subject',
                'created-at'    => 'Created At',
                'move-to-inbox' => 'Moved To Inbox',
                'edit'          => 'Edit',
                'view'          => 'View',
                'delete'        => 'Delete',
            ],
        ],

        'create-success'      => 'Email sent successfully.',
        'update-success'      => 'Email updated successfully.',
        'mass-update-success' => 'Emails updated successfully.',
        'delete-success'      => 'Email deleted successfully.',
        'delete-failed'       => 'Email can not be deleted.',

        'view' => [
            'title'              => 'Mails',
            'subject'            => ':subject',
            'link-mail'          => 'Link Mail',
            'to'                 => 'To',
            'cc'                 => 'CC',
            'bcc'                => 'BCC',
            'reply'              => 'Reply',
            'reply-all'          => 'Reply All',
            'forward'            => 'Forward',
            'delete'             => 'Delete',
            'enter-mails'        => 'Enter email id',
            'message'            => 'Message',
            'add-attachments'    => 'Add Attachments',
            'discard'            => 'Discard',
            'send'               => 'Send',
            'no-result-found'    => 'No Results found',
            'add-new-contact'    => 'Add New Contact',
            'description'        => 'Description',
            'search'             => 'Search...',
            'add-new-lead'       => 'Add New Lead',
            'create-new-contact' => 'Create New Contact',
            'save-contact'       => 'Save Contact',
            'create-lead'        => 'Create Lead',
            'linked-contact'     => 'Linked Contact',
            'link-to-contact'    => 'Link To Contact',
            'link-to-lead'       => 'Link To Lead',
            'linked-lead'        => 'Linked Lead',
            'lead-details'       => 'Lead Details',
            'contact-person'     => 'Contact Person',
            'product'            => 'Product',
        ],
    ],

    'common' => [
        'custom-attributes' => [
            'select-country' => 'Select Country',
            'select-state'   => 'Select State',
            'state'          => 'State',
            'city'           => 'City',
            'postcode'       => 'Postcode',
            'work'           => 'Work',
            'home'           => 'Home',
            'add-more'       => 'Add More',
            'select'         => 'Select',
        ],
    ],

    'leads' => [
        'create-success'    => 'Lead created successfully.',
        'update-success'    => 'Lead updated successfully.',
        'destroy-success'   => 'Lead deleted successfully.',
        'destroy-failed'    => 'Lead can not be deleted.',

        'index' => [
            'title'      => 'Leads',
            'create-btn' => 'Create Lead',

            'datagrid' => [
                'id'                  => 'ID',
                'sales-person'        => 'Sales Person',
                'subject'             => 'Subject',
                'source'              => 'Source',
                'lead-value'          => 'Lead Value',
                'contact-person'      => 'Contact Person',
                'stage'               => 'Stage',
                'rotten-lead'         => 'Rotten Lead',
                'expected-close-date' => 'Expected Close Date',
                'created-at'          => 'Created At',
                'no'                  => 'No',
                'yes'                 => 'Yes',
                'delete'              => 'Delete',
                'mass-delete'         => 'Mass Delete',
                'mass-update'         => 'Mass Update',
            ],

            'kanban' => [
                'columns' => [
                    'contact-person'      => 'Contact Person',
                    'id'                  => 'ID',
                    'lead-type'           => 'Lead Type',
                    'lead-value'          => 'Lead Value',
                    'sales-person'        => 'Sales Person',
                    'source'              => 'Source',
                    'title'               => 'Title',
                    'tags'                => 'Tags',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'Search',
                    ],

                    'filters' => [
                        'apply-filters' => 'Apply Filters',
                        'clear-all'     => 'Clear All',
                        'filter'        => 'Filter',
                        'filters'       => 'Filters',
                        'select'        => 'Select',
                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'All Pipelines',
                'create-new-pipeline' => 'Create New Pipeline',
            ],
        ],

        'create' => [
            'title'          => 'Create Lead',
            'save-btn'       => 'Save',
            'details'        => 'Details',
            'details-info'   => 'Put The Basic Information of the Lead',
            'contact-person' => 'Contact Person',
            'contact-info'   => 'Information About the Contact Person',
            'products'       => 'Products',
            'products-info'  => 'Information About the Products',
        ],

        'edit' => [
            'title'          => 'Edit Lead',
            'save-btn'       => 'Save',
            'details'        => 'Details',
            'details-info'   => 'Put The Basic Information of the Lead',
            'contact-person' => 'Contact Person',
            'contact-info'   => 'Information About the Contact Person',
            'products'       => 'Products',
            'products-info'  => 'Information About the Products',
        ],

        'common' => [
            'contact' => [
                'name'           => 'Name',
                'email'          => 'Email',
                'contact-number' => 'contact-number',
                'organization'   => 'Organization',
            ],

            'products' => [
                'product-name' => 'Product Name',
                'quantity'     => 'quantity',
                'price'        => 'Price',
                'amount'       => 'Amount',
                'action'       => 'Action',
                'add-more'     => 'Add More',
                'total'        => 'Total',
            ],
        ],

        'view' => [
            'title'       => 'Lead: :title',
            'rotten-days' => ':days Days',

            'attributes' => [
                'title' => 'About Lead',
            ],

            'quotes'=> [
                'subject'         => 'Subject',
                'expired-at'      => 'Expired At',
                'sub-total'       => 'Sub Total',
                'discount'        => 'Discount',
                'tax'             => 'Tax',
                'adjustment'      => 'Adjustment',
                'grand-total'     => 'Grand Total',
                'delete'          => 'Delete',
                'edit'            => 'Edit',
                'download'        => 'Download',
                'destroy-success' => 'Quote deleted successfully.',
                'empty-title'     => 'No Quotes Found',
                'empty-info'      => 'No Quotes Found for this Lead',
            ],

            'products' => [
                'product-name' => 'Product Name',
                'quantity'     => 'quantity',
                'price'        => 'Price',
                'amount'       => 'Amount',
                'action'       => 'Action',
                'add-more'     => 'Add More',
                'total'        => 'Total',
                'empty-title'  => 'No Products Found',
                'empty-info'   => 'No Products Found for this Lead',
                'add-product'  => 'Add Product',
            ],

            'persons' => [
                'title'     => 'About Persons',
                'job-title' => ':job_title at :organization',
            ],

            'stages' => [
                'won-lost'       => 'Won/Lost',
                'won'            => 'Won',
                'lost'           => 'Lost',
                'need-more-info' => 'Need More Details',
                'closed-at'      => 'Closed At',
                'won-value'      => 'Won Value',
                'lost-reason'    => 'Lost Reason',
            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'title'    => 'Configuration',
            'search'   => 'Search',
            'back'     => 'Back',
            'save-btn' => 'Save Configuration',

            'general'  => [
                'title'   => 'General',
                'info'    => 'General Configuration',

                'general' => [
                    'title'           => 'General',
                    'info'            => 'Update your general settings here.',
                    'locale-settings' => [
                        'title'       => 'Locale Settings',
                        'title-info'  => 'Defines the language used in the user interface, such as English (en), French (fr), or Japanese (ja).',
                    ],
                ],
            ],
        ],
    ],

    // ----------------------------------------------------------------Old version locale ----------------------------------

    'dashboard' => [
        'index' => [
            'title' => 'Dashboard',

            'revenue' => [
                'lost-revenue' => 'Lost Revenue',
                'won-revenue'  => 'Won Revenue',
            ],

            'over-all' => [
                'average-lead-value'    => 'Average Lead Value',
                'total-leads'           => 'Total Leads',
                'average-leads-per-day' => 'Average Leads Per Day',
                'total-quotations'      => 'Total Quotations',
                'total-persons'         => 'Total Persons',
                'total-organizations'   => 'Total Organizations',
            ],

            'total-leads' => [
                'title' => 'Leads',
                'total' => 'Total Leads',
                'won'   => 'Won Leads',
                'lost'  => 'Lost Leads',
            ],

            'revenue-by-sources' => [
                'title' => 'Revenue By Sources',
            ],

            'revenue-by-types' => [
                'title' => 'Revenue By Types',
            ],

            'top-selling-products' => [
                'title'       => 'Top Products',
                'empty-title' => 'No Products Found',
                'empty-info'  => 'No products found for reports',
            ],

            'top-persons' => [
                'title'       => 'Top Persons',
                'empty-title' => 'No Persons Found',
                'empty-info'  => 'No persons found for reports',
            ],
        ],
    ],

    'layouts' => [
        'app-version'          => 'Version : :version',
        'dashboard'            => 'Dashboard',
        'leads'                => 'Leads',
        'quotes'               => 'Quotes',
        'quote'                => 'Quote',
        'mail'                 => [
            'title'   => 'Mail',
            'compose' => 'Compose',
            'inbox'   => 'Inbox',
            'draft'   => 'Draft',
            'outbox'  => 'Outbox',
            'sent'    => 'Sent',
            'trash'   => 'Trash',
            'setting' => 'Setting',
        ],
        'activities'           => 'Activities',
        'contacts'             => 'Contacts',
        'persons'              => 'Persons',
        'person'               => 'Person',
        'organizations'        => 'Organizations',
        'organization'         => 'Organization',
        'products'             => 'Products',
        'product'              => 'Product',
        'settings'             => 'Settings',
        'user'                 => 'User',
        'user-info'            => 'Manage all your users and their permissions in the CRM, what they’re allowed to do.',
        'groups'               => 'Groups',
        'groups-info'          => 'Add, edit or delete groups from CRM',
        'roles'                => 'Roles',
        'role'                 => 'Role',
        'roles-info'           => 'Add, edit or delete roles from CRM',
        'users'                => 'Users',
        'users-info'           => 'Add, edit or delete users from CRM',
        'lead'                 => 'Lead',
        'lead-info'            => 'Manage all your leads related settings in the CRM',
        'pipelines'            => 'Pipelines',
        'pipelines-info'       => 'Add, edit or delete pipelines from CRM',
        'sources'              => 'Sources',
        'sources-info'         => 'Add, edit or delete sources from CRM',
        'types'                => 'Types',
        'types-info'           => 'Add, edit or delete types from CRM',
        'automation'           => 'Automation',
        'automation-info'      => 'Manage all your automation related settings in the CRM',
        'attributes'           => 'Attributes',
        'attribute'            => 'Attribute',
        'attributes-info'      => 'Add, edit or delete attributes from CRM',
        'email-templates'      => 'Email Templates',
        'email'                => 'Email',
        'email-templates-info' => 'Add, edit or delete email templates from CRM',
        'workflows'            => 'Workflows',
        'workflows-info'       => 'Add, edit or delete workflows from CRM',
        'other-settings'       => 'Other Settings',
        'other-settings-info'  => 'Manage all your extra settings in the CRM',
        'tags'                 => 'Tags',
        'tags-info'            => 'Add, edit or delete tags from CRM',
        'my-account'           => 'My Account',
        'sign-out'             => 'Sign Out',
        'back'                 => 'Back',
        'name'                 => 'Name',
        'configuration'        => 'Configuration',
        'activities'           => 'Activities',
        'howdy'                => 'Howdy!',
        'warehouses'           => 'Warehouses',
        'warehouse'            => 'Warehouse',
        'warehouses-info'      => 'Add, edit or delete warehouses from CRM',
    ],

    'user' => [
        'account' => [
            'name'                  => 'Name',
            'email'                 => 'Email',
            'password'              => 'Password',
            'my_account'            => 'My account',
            'update_details'        => 'Update Details',
            'current_password'      => 'Current password',
            'confirm_password'      => 'Confirm password',
            'password-match'        => 'Current password does not match.',
            'account-save'          => 'Account changes saved successfully.',
            'permission-denied'     => 'Permission Denied',
            'remove-image'          => 'Remove Image',
            'upload_image_pix'      => 'Upload a Profile Image (100px x 100px)',
            'upload_image_format'   => 'in PNG or JPG Format',
            'image_upload_message'  => 'Only images (.jpeg, .jpg, .png, ..) are allowed.',
        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => 'Dear :name',
            'cheers' => 'Cheers,</br>Team :app_name',
        ],
    ],

    'errors' => [
        '401' => 'You are not authorized to access this page',
    ],
];
