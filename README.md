# XLegal

XLegal is a documentation-first Laravel package for legal architecture and
traceability for Treasury and Settlement systems in the x-change ecosystem.

## What XLegal is

- A domain scaffold that captures legal intent in code contracts and documentation.
- A central place for legal authority, regulatory constraints, and architecture alignment.
- A repository for traceability artifacts that future implementation can depend on.

## What XLegal is not

- It is not a law firm and does not give legal advice.
- It does not determine legal status outcomes (for example, EMI or non-EMI conclusions).
- It does not implement business or payment logic.
- It does not perform legal opinions or definitive regulatory filings.

## Why this package exists

XLegal exists so legal architecture can be explicit and testable before
implementation details are finalized. It helps teams track:

- legal intent
- regulatory obligations
- architectural implications
- unresolved assumptions

The package is intentionally lightweight to avoid accidental coupling between
technical execution and unresolved legal meaning.

## Relationship to x-change

XLegal is designed as an upstream legal-architecture package for future x-change
components. It does not alter x-change behavior by itself. It provides contracts,
value objects, and documentation that other packages can map to.

## Current status

- Package scaffold: initial
- Approach: documentation-first, with legal conclusions deferred
- Vocabulary: Treasury and Settlement (wallet semantics are intentionally avoided)

## Planned direction

1. Expand the documentation matrix and open-question register.
2. Formalize mandatory obligations as invariants and trace links.
3. Introduce interfaces and adapters in aligned downstream packages.
4. Maintain a visible "decisions + open questions" trail for review cycles.

## Installation

Not yet intended as a published runtime package until the documentation-first
contract model is approved and integrated by consuming services.

