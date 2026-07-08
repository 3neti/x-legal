# Legal Characterization

This document asks the central characterization question:

```text
What is x-change, legally?
```

It does not answer that question conclusively. Its purpose is to preserve candidate
characterizations, expose the facts each theory depends on, and identify the
architectural consequences if a theory is true.

## Treasury and Settlement Agent

Theory: x-change acts under a limited mandate to support treasury and settlement
activity for identified principals.

Why it may apply: The architecture is oriented around mandates, client funds,
settlement instructions, reservations, execution, expiration, return, and journaled
evidence.

Why it may not apply: Actual behavior, user expectations, product language, fund
handling, or regulatory interpretation may treat the activity as something broader
than limited agency or settlement support.

Architectural consequences if true: The system must preserve mandate evidence,
principal attribution, instruction specificity, fund segregation, lifecycle closure,
and auditability.

Open questions: What language and operational controls are required for the mandate
to be legally meaningful?

## Payment Execution Agent

Theory: x-change may be characterized as an agent executing payment or settlement
instructions on behalf of principals.

Why it may apply: The system may receive instructions, reserve funds, and cause
execution through defined rails or counterparties.

Why it may not apply: If the system holds value, issues instruments, controls funds
outside narrow instructions, or operates payment infrastructure, another
classification may be more appropriate.

Architectural consequences if true: Instructions, authority, execution timing,
revocation, failed execution, reconciliation, and disclosures must be precise.

Open questions: Which activities count as execution support rather than regulated
payment system operation?

## Custodial / Client Funds Administrator

Theory: x-change may administer or control client funds in a way that creates
custody-like obligations.

Why it may apply: The architecture contemplates client funds, segregation,
reservations, returns, and insolvency questions.

Why it may not apply: The actual banking structure, contractual role, and degree of
control may support a narrower characterization.

Architectural consequences if true: The system must strengthen segregation,
reconciliation, insolvency treatment, disclosures, access controls, and audit
records.

Open questions: What factual patterns create custody or client-funds administration
risk?

## Escrow-like Arrangement

Theory: x-change may be viewed as facilitating an escrow-like arrangement where
funds are held or reserved pending conditions.

Why it may apply: Reservation, lien, condition-based release, and settlement
instruction concepts may resemble escrow mechanics.

Why it may not apply: If x-change does not hold funds as neutral stakeholder or
does not condition release under an escrow arrangement, the analogy may be limited.

Architectural consequences if true: Conditions, parties, release triggers, dispute
handling, return paths, and fiduciary-like controls must be explicit.

Open questions: Which conditions, if any, create escrow-like legal obligations?

## Operator of Payment System

Theory: x-change may be characterized as operating or participating in a payment
system or payment arrangement requiring registration or oversight.

Why it may apply: Product behavior may involve payment execution, transfer
coordination, participant rules, or settlement infrastructure.

Why it may not apply: A narrow technology, agency, or treasury model may describe
some activities differently depending on facts and law.

Architectural consequences if true: Governance, participant rules, risk controls,
operational resilience, reporting, and registration analysis may become central.

Open questions: Which BSP definitions and factual thresholds must be mapped first?

## Electronic Money Issuer

Theory: x-change may be characterized as issuing electronic money or stored value.

Why it may apply: If users perceive reusable stored balances or transferable value,
or if credentials function as monetary value, EMI concerns may arise.

Why it may not apply: If funds remain mandate-bound, instruction-specific,
non-circulating, non-general-purpose, and tied to settlement execution, the analysis
may differ.

Architectural consequences if true: The architecture would need to account for EMI
licensing, float treatment, redemption, disclosures, safeguarding, reporting, and
consumer protection obligations.

Open questions: Which facts would cause Treasury Position or Pay Code to be viewed
as stored value?

## Technology Provider

Theory: x-change may be characterized as providing technology that supports
treasury and settlement workflows without itself assuming regulated fund-handling
or issuer roles.

Why it may apply: Some components may only provide software, records, interfaces,
or workflow support.

Why it may not apply: Product control over funds, instructions, settlement
execution, credentials, or user obligations may exceed a pure technology role.

Architectural consequences if true: Boundaries between software provider,
principal, bank, settlement counterparty, and operating entity must be precise.

Open questions: Which parts of the system are pure technology, and which create
regulated operational responsibility?
