<?php

return [
    'enabled' => true,
    'documents_path' => 'docs',
    'legal_model' => [
        'primary_role' => 'treasury_and_settlement_agent',
        'status' => 'under_analysis',
    ],
    'context' => [
        'jurisdiction' => env('X_LEGAL_JURISDICTION'),
        'legal_entity_reference' => env('X_LEGAL_ENTITY_REFERENCE'),
        'profile' => env('X_LEGAL_PROFILE', 'treasury-settlement-ph-v1'),
    ],
    'profiles' => [
        'treasury-settlement-ph-v1' => [
            'version' => '2026-07-25.1',
            'status' => 'under_analysis',
            'jurisdiction' => 'PH',
            'effective_at' => null,
            'public_display_approved' => false,
            'trace_references' => [
                'adr:0001-treasury-over-wallet',
                'status:under-analysis',
            ],
            'decisions' => [],
            'vocabulary' => [
                'operator' => [
                    'internal_balance' => [
                        'label' => 'Client Funds',
                        'description' => 'Recognized client funds attributed to this account across its provider positions.',
                    ],
                    'outstanding_pay_codes' => [
                        'label' => 'Outstanding Pay Codes',
                        'description' => 'Recognized client funds currently reserved by active Pay Code obligations.',
                    ],
                    'issuance_capacity' => [
                        'label' => 'Issuance Capacity',
                        'description' => 'The amount currently available for new Pay Codes after provider liquidity and outstanding obligations are considered.',
                    ],
                    'account_funding' => [
                        'label' => 'Account Funding',
                        'description' => 'Provider-verified value recognized for an account without implying a stored-value product.',
                    ],
                    'reusable_funding_address' => [
                        'label' => 'Reusable Funding Address',
                        'description' => 'A persistent provider destination used to attribute verified incoming funds to an account.',
                    ],
                    'provider_account' => [
                        'label' => 'Provider Account',
                        'description' => 'An external bank or EMI resource connected to an account or to the system Treasury.',
                    ],
                    'exact_funding_intent' => [
                        'label' => 'Exact Funding Intent',
                        'description' => 'A time-bound instruction for an exact provider-verified funding amount.',
                    ],
                    'treasury_position' => [
                        'label' => 'Treasury Position',
                        'description' => 'A purpose-bound internal position attributed to a principal and mandate.',
                    ],
                    'available_for_instructions' => [
                        'label' => 'Available for Instructions',
                        'description' => 'Recognized client funds that are not currently reserved.',
                    ],
                    'reserved_for_pay_codes' => [
                        'label' => 'Reserved for Pay Codes',
                        'description' => 'Client funds reserved for outstanding settlement instructions.',
                    ],
                    'provider_liquidity' => [
                        'label' => 'Provider Liquidity',
                        'description' => 'The latest authoritative or cached provider-side liquidity observation.',
                    ],
                    'recognized_client_funds' => [
                        'label' => 'Recognized Client Funds',
                        'description' => 'Client funds recognized only from verified funding evidence.',
                    ],
                    'treasury_clearing_position' => [
                        'label' => 'Treasury Clearing Position',
                        'description' => 'A system-controlled position used while value is being attributed.',
                    ],
                ],
                'technical' => [
                    'treasury_position' => [
                        'label' => 'Treasury Position',
                        'description' => 'The provider-neutral domain boundary backed by an internal ledger position.',
                    ],
                    'settlement_resource' => [
                        'label' => 'Settlement Resource',
                        'description' => 'An external provider resource against which inventory is observed.',
                    ],
                ],
            ],
        ],
    ],
    'traceability' => [
        'enabled' => true,
    ],
];
