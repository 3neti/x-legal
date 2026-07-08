# Adverse Arguments Log

This document intentionally explores regulator skepticism without deciding outcomes.

## Why a regulator might view x-change as EMI

- Instructions are sold, marketed, or promoted as a generic spend mechanism.
- Funds become effectively interchangeable across principals.
- Operational patterns blur settlement credentialing with value storage.

### Architectural facts that must be true to counter

- Tight principal-specific mandate mapping.
- Clear non-cash-value treatment of credentials.
- Explicit controls tying each action to a valid instruction lifecycle.

## Why a regulator might view Pay Code as stored value

- Pay Code reused for purpose-different actions.
- No visible link to a specific settlement instruction.
- Lack of explicit “no stored value” semantic boundary.

### Architectural facts that must be true to counter

- `PayCodeInstrument` explicitly references settlement instruction identifiers.
- Non-circulability and no independent stored balance semantics.
- Expiry and state transitions documented and auditable.

## Why a regulator might question the Treasury Mandate

- Mandate lacks granularity by principal, purpose, and limits.
- Mandate appears advisory rather than operationally binding.

### Architectural facts that must be true to counter

- `TreasuryMandate` enforces minimum required semantics.
- Mandate changes are traceable in legal architecture and journal.

## Why an omnibus bank account may create risk

- Blurring legal characterization of client funds and institutional operating funds.
- Difficulty proving attributable balances.

### Architectural facts that must be true to counter

- Segregated handling requirements in invariant and ledger interfaces.
- Reservation, execution, and return evidence at each touchpoint.

## Why OPS registration may still be relevant

- Activities may still be viewed as regulated payment intermediation depending on implementation.

### Architectural facts that must be true to counter

- Conservatively document unresolved questions.
- Track factual dependency of each feature against obligations.
- Tie implementation phases to legal review checkpoints.
