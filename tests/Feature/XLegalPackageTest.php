<?php

namespace LBHurtado\XLegal\Tests\Feature;

use LBHurtado\XLegal\Contracts\ClientFundsLedger;
use LBHurtado\XLegal\Contracts\LegalTraceabilityRepository;
use LBHurtado\XLegal\Contracts\LienRegistry;
use LBHurtado\XLegal\Contracts\PayCodeInstrument;
use LBHurtado\XLegal\Contracts\SettlementInstruction;
use LBHurtado\XLegal\Contracts\TreasuryMandate;
use LBHurtado\XLegal\ValueObjects\ArchitecturalInvariant;
use LBHurtado\XLegal\ValueObjects\LegalAuthority;
use LBHurtado\XLegal\ValueObjects\LegalTrace;
use LBHurtado\XLegal\ValueObjects\RegulatoryConstraint;
use LBHurtado\XLegal\XLegalServiceProvider;
use PHPUnit\Framework\TestCase;

class XLegalPackageTest extends TestCase
{
    public function test_service_provider_class_exists(): void
    {
        $this->assertTrue(class_exists(XLegalServiceProvider::class));
    }

    public function test_config_file_is_publishable_shape(): void
    {
        $config = require dirname(__DIR__, 2) . '/config/x-legal.php';

        $this->assertIsArray($config);
        $this->assertTrue($config['enabled']);
        $this->assertEquals('docs', $config['documents_path']);
        $this->assertEquals('under_analysis', $config['legal_model']['status']);
        $this->assertArrayHasKey('traceability', $config);
    }

    public function test_contracts_exist(): void
    {
        $this->assertTrue(interface_exists(TreasuryMandate::class));
        $this->assertTrue(interface_exists(SettlementInstruction::class));
        $this->assertTrue(interface_exists(ClientFundsLedger::class));
        $this->assertTrue(interface_exists(LienRegistry::class));
        $this->assertTrue(interface_exists(PayCodeInstrument::class));
        $this->assertTrue(interface_exists(LegalTraceabilityRepository::class));
    }

    public function test_value_objects_are_instantiable(): void
    {
        $authority = new LegalAuthority('BSP', 'R-001', 'Example authority');
        $constraint = new RegulatoryConstraint('PH', 'R-002', 'Example constraint');
        $invariant = new ArchitecturalInvariant('INV-001', 'Funds segregation');
        $trace = new LegalTrace([$authority], [$constraint], [$invariant]);

        $this->assertSame('BSP', $authority->source);
        $this->assertSame('R-002', $constraint->identifier);
        $this->assertSame('INV-001', $invariant->code);
        $this->assertCount(1, $trace->authorities);
        $this->assertCount(1, $trace->constraints);
        $this->assertCount(1, $trace->invariants);
    }
}
