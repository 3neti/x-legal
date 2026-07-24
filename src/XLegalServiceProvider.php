<?php

namespace LBHurtado\XLegal;

use Illuminate\Support\ServiceProvider;
use LBHurtado\XLegal\Contracts\JurisdictionContextResolverContract;
use LBHurtado\XLegal\Contracts\LegalConstraintEvaluationContract;
use LBHurtado\XLegal\Contracts\LegalVocabularyResolverContract;
use LBHurtado\XLegal\Contracts\TreasuryPolicyProfileResolverContract;
use LBHurtado\XLegal\Services\AdvisoryLegalConstraintEvaluator;
use LBHurtado\XLegal\Services\ConfiguredJurisdictionContextResolver;
use LBHurtado\XLegal\Services\ConfiguredLegalVocabularyResolver;
use LBHurtado\XLegal\Services\ConfiguredTreasuryPolicyProfileResolver;

class XLegalServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/x-legal.php',
            'x-legal'
        );

        $this->app->singleton(
            JurisdictionContextResolverContract::class,
            fn (): ConfiguredJurisdictionContextResolver => new ConfiguredJurisdictionContextResolver(
                defaults: (array) config('x-legal.context', []),
            ),
        );

        $this->app->singleton(
            TreasuryPolicyProfileResolverContract::class,
            fn (): ConfiguredTreasuryPolicyProfileResolver => new ConfiguredTreasuryPolicyProfileResolver(
                profiles: (array) config('x-legal.profiles', []),
            ),
        );

        $this->app->singleton(
            LegalVocabularyResolverContract::class,
            fn (): ConfiguredLegalVocabularyResolver => new ConfiguredLegalVocabularyResolver(
                profiles: (array) config('x-legal.profiles', []),
            ),
        );

        $this->app->singleton(
            LegalConstraintEvaluationContract::class,
            fn (): AdvisoryLegalConstraintEvaluator => new AdvisoryLegalConstraintEvaluator(
                profiles: $this->app->make(TreasuryPolicyProfileResolverContract::class),
            ),
        );
    }

    public function boot(): void
    {
        $this->publishes(
            [
                __DIR__.'/../config/x-legal.php' => config_path('x-legal.php'),
            ],
            'x-legal-config'
        );
    }
}
