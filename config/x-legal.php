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
            'version' => '2026-07-27.1',
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
                    'funding_qr_ph' => [
                        'label' => 'QR Ph',
                        'description' => 'A provider-verified QR Ph funding method attributed to an account.',
                    ],
                    'funding_bank_transfer' => [
                        'label' => 'Bank Transfer',
                        'description' => 'A provider-verified transfer made to configured banking instructions.',
                    ],
                    'funding_pay_code' => [
                        'label' => 'Pay Code',
                        'description' => 'A credential that applies an existing Account Funding settlement instruction.',
                    ],
                    'funding_reviewed_value' => [
                        'label' => 'Reviewed Value',
                        'description' => 'A request for independently reviewed backing that does not itself recognize Client Funds.',
                    ],
                    'funding_activity' => [
                        'label' => 'Funding Activity',
                        'description' => 'A normalized lifecycle view of funding instructions, observations, reviews, and recognition.',
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
                    'instruction_service_charge' => [
                        'label' => 'Instruction Service Charge',
                        'description' => 'A separately disclosed charge for issuing and supporting a settlement instruction; it is not Pay Code principal.',
                    ],
                    'commercial_offering' => [
                        'label' => 'Commercial Offering',
                        'description' => 'An approved combination of a Price List, Waterfall Policy, attribution rules, and legal-policy trace.',
                    ],
                    'commercial_waterfall' => [
                        'label' => 'Waterfall',
                        'description' => 'The approved allocation policy applied only to an Instruction Service Charge.',
                    ],
                    'provider_cost_payable' => [
                        'label' => 'Provider Cost Payable',
                        'description' => 'An expected obligation to a provider that remains unpaid until matched to authoritative settlement evidence.',
                    ],
                    'product_revenue' => [
                        'label' => 'Product Revenue',
                        'description' => 'The portion of an Instruction Service Charge allocated to an identified product under an approved policy.',
                    ],
                    'partner_commission_payable' => [
                        'label' => 'Partner Commission Payable',
                        'description' => 'An accrued obligation to an eligible attributed partner; allocation does not establish that payment occurred.',
                    ],
                    'commercial_revenue' => [
                        'label' => 'Commercial Revenue',
                        'description' => 'The residual commercial allocation after approved costs, product revenue, and partner payables.',
                    ],
                    'commission_settlement' => [
                        'label' => 'Commission Settlement',
                        'description' => 'The controlled discharge of a Partner Commission Payable against authoritative settlement evidence.',
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
                    'commercial_catalog' => [
                        'label' => 'Commercial Catalog',
                        'description' => 'The immutable technical Price List snapshot used by a Commercial Offering.',
                    ],
                    'commercial_allocation_policy' => [
                        'label' => 'Commercial Allocation Policy',
                        'description' => 'The immutable technical policy that conserves an Instruction Service Charge across classified destinations.',
                    ],
                ],
            ],
        ],
    ],
    'traceability' => [
        'enabled' => true,
    ],
];
