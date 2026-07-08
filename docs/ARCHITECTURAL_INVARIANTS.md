# Architectural Invariants (Proposed)

These are proposed and pending legal review.

1. Client funds never become operating funds of x-change.
2. Every peso must be attributable to an identifiable principal.
3. Every Treasury Position must be supported by a Treasury Mandate.
4. Every reservation must be evidenced by a Lien.
5. Every Pay Code must identify an existing Settlement Instruction.
6. Pay Code must not represent stored monetary value.
7. No Treasury Position may exist indefinitely without execution, expiration, return, or review.
8. Every movement of client funds must be journaled.
9. Treasury funds must be segregated from operating funds.
10. The architecture must not require x-change to issue electronic money.

## Review protocol

- Status for all invariants starts as `proposed`.
- Each invariant must be tested against regulator-style assumptions before implementation.
