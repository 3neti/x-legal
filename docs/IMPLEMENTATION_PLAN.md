# Implementation Plan (XLegal)

1. Scaffold package.
2. Seed grammar and invariants.
3. Gather legal authorities.
4. Extract obligations.
5. Map obligations to architecture.
6. Run adverse-argument review.
7. Update x-change architecture with mapped constraints.
8. Arrange external Philippine banking counsel review.
9. Prepare regulatory engagement package.

## Execution notes

- Keep package-level behavior to contracts and immutable data objects.
- Do not implement settlement, payment, treasury, escrow, custody, or transfer logic.
- Keep each step annotated with legal status: hypothesis, pending review, confirmed.
