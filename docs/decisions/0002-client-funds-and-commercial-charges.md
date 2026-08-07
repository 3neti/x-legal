# 0002: Separate Client Funds From Commercial Charges

## Status

Proposed

## Context

Pay Code issuance may include a charge for instruction generation, validation,
delivery, provider services, product operation, or partner participation. Combining
that charge with settlement principal would obscure which funds remain attributable
to the Principal and which amount is being charged for a service.

## Decision

The architecture will represent the Pay Code or Settlement Instruction principal
separately from the Instruction Service Charge. Only the separately disclosed and
authorized charge may enter a Commercial Allocation Policy.

Client Funds, reserved settlement principal, and provider Inventory must not be
classified as revenue, provider cost, or commission merely because they share a
Treasury connection with a commercial charge.

## Consequences

Quotes, confirmations, sale snapshots, Treasury postings, Cockpit views, and Journal
events must preserve the distinction. Existing legal uncertainty remains visible;
this decision is an architectural discipline, not a legal opinion.
