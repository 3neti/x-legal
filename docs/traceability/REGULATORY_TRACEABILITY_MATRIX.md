# Regulatory Traceability Matrix

The Regulatory Traceability Matrix is the bridge between legal reasoning and
implementation evidence.

It is not intended to be a static checklist. It is a design objective: every
meaningful Treasury and Settlement behavior should eventually be traceable from
business requirement to legal authority, architectural invariant, code, test, and
audit evidence.

## Purpose

The matrix exists because legal risk often appears at the boundaries between teams:
product describes one thing, counsel analyzes another, engineering implements a
third, and audit later has to infer how they relate.

XLegal should prevent that drift by making the chain visible.

The desired trace is:

```text
Business Requirement
-> Legal Authority or Open Question
-> Regulatory Constraint
-> Architectural Invariant
-> Package
-> Class
-> Method
-> Test
-> Audit Evidence
```

The matrix begins as documentation. Over time, it should become a navigable map of
the ecosystem.

## What each row should answer

Each row should help a reviewer understand:

- What business or product need created the issue?
- Which legal authority, counsel note, open question, or regulatory concern is
  relevant?
- What architectural consequence follows?
- Which invariant protects the consequence?
- Which package carries the behavior?
- Which class, method, command, event, migration, or test implements or verifies it?
- What remains unresolved?

## Starter matrix

| ID | Business Requirement | Legal/Regulatory Source | Requirement or Concern | Architectural Invariant | Package | Class / Artifact | Method / Behavior | Test / Evidence | Status | Open Questions |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| RTM-001 | Accept funds for settlement-oriented use | Placeholder authority source | Confirm whether mandate language supports limited treasury role | Every Treasury Position must be supported by a Treasury Mandate | `3neti/x-legal` | `TreasuryMandate` | Mandate identity, principal identity, purpose limitation | Pending | Draft | What mandate language is required? |
| RTM-002 | Reserve funds for a specific instruction | Placeholder requirement | Avoid ambiguous availability of client funds | Every reservation must be evidenced by a Lien | `3neti/x-legal` | `LienRegistry` | Reserve, release, execute, query active liens | Pending | Draft | What evidence is required for release or execution? |
| RTM-003 | Issue Pay Code for redemption | Placeholder concern | Avoid implying stored monetary value | Every Pay Code must identify an existing Settlement Instruction | `3neti/x-legal` | `PayCodeInstrument` | Link credential to instruction | Pending | Draft | Which facts would make Pay Code look like stored value? |
| RTM-004 | Maintain principal-facing fund state | Placeholder segregation concern | Avoid mixing client funds and operating funds | Client funds never become operating funds | `3neti/x-legal` | `ClientFundsLedger` | Total, reserved, available, reconciliation reference | Pending | Draft | What controls prove segregation? |
| RTM-005 | Preserve explainability for future review | Placeholder audit concern | Ensure decisions and state changes can be reconstructed | Every movement of client funds must be journaled | `3neti/x-legal` | `LegalTrace` / future Journal artifact | Link authority, constraint, invariant, artifact, question | Pending | Draft | What journal fields are mandatory? |

## Status meanings

- Draft: proposed row requiring review.
- Under analysis: actively being mapped or challenged.
- Counsel review: awaiting or incorporating external legal review.
- Accepted working model: approved for current architecture, still revisable.
- Superseded: replaced by a later decision, authority, or model.

## Design target

Future engineering work should not merely reference this matrix manually. The
long-term target is for packages, classes, methods, tests, and decision records to
carry stable identifiers that make traceability queryable.

For example:

```text
RTM-003
-> ADR-0001
-> INV-005
-> 3neti/x-legal
-> PayCodeInstrument
-> settlementInstructionId()
-> test_pay_code_cannot_stand_without_instruction
```

The exact tooling can evolve later. The principle should be stable now.

## Review discipline

Rows should not be promoted because they are convenient. They should move forward
only when the source, concern, consequence, and implementation path are clear enough
for the current stage of the ecosystem.

Where the law is uncertain, the matrix should say so. Where facts could change the
analysis, the matrix should name those facts.
