# Legal Architecture

This document describes the intended legal model of the 3neti Treasury and
Settlement architecture as a working system of concepts. It is not a legal opinion
and does not settle regulatory characterization. The concepts below are under
continuing analysis and must remain open to revision by research, external counsel,
and regulatory engagement.

## Model orientation

The architecture is moving toward a mandate-and-instruction model rather than a
wallet-centered model. In this model, the system should be able to explain:

- Who the principal is.
- What authority exists for handling funds.
- What instruction is being executed.
- What funds are reserved for that instruction.
- What credential, if any, enables redemption.
- What evidence proves the lifecycle.
- Which legal or regulatory constraints shaped the design.

The model should be evaluated by facts and behavior, not by naming alone.

## Principal

The Principal is the person or entity to whom client funds and settlement authority
must remain traceable. The Principal is the anchor of the model because legal
meaning begins with whose funds, whose instruction, and whose authority are being
represented.

A future implementation should avoid anonymous or pooled abstractions that make it
impossible to attribute funds, mandates, reservations, or instructions to a
principal-facing explanation.

## Treasury Mandate

A Treasury Mandate is the working concept for authority granted by a Principal for
limited Treasury and Settlement purposes. It is not yet a settled legal conclusion.
It is an architectural hypothesis that must be tested against applicable law,
contract language, disclosures, banking arrangements, and actual product behavior.

The mandate should answer:

- Who authorized the activity?
- What activity is permitted?
- What activity is prohibited?
- When did the authority begin?
- How can it end or be revoked?
- What evidence proves its existence?

## Treasury and Settlement Agent

The Treasury and Settlement Agent is the working role for the entity that acts under
mandate to manage settlement-oriented instructions. This role must not be assumed to
avoid regulation. It is a model for disciplined analysis.

The architecture should keep this role narrow. If future behavior expands beyond
mandate-bound settlement activity, the model must be revisited.

## Client Funds

Client Funds are funds attributable to a Principal and constrained by mandate,
instruction, and applicable regulation. They should not be treated as operating
funds or generic platform assets.

Future engineering should preserve evidence of:

- Attribution to a Principal.
- Permitted purpose.
- Current state.
- Reservation status.
- Reconciliation reference.
- Return or execution path.

## Treasury Position

A Treasury Position is the system's representation of client-funds posture. It is
not intended to imply stored value. It is a traceable state used to explain how
funds relate to a mandate, instruction, reservation, or return.

Every Treasury Position should eventually be explainable by the legal grammar:

```text
Principal
-> Treasury Mandate
-> Client Funds
-> Treasury Position
-> Instruction or Return Path
```

## Lien and Reservation

A Lien is the evidence concept for a reservation against Client Funds. A
Reservation is the operational state; a Lien is the legal-architecture record that
the reservation exists for a specific purpose.

This distinction matters because reserved funds must not drift into ambiguous
availability. A reservation should have a reason, amount, principal, instruction
link, status, and termination path.

## Settlement Instruction

A Settlement Instruction is a specific instruction tied to a Principal, purpose,
amount, and lifecycle. It should not be treated as a general balance or open-ended
stored-value entitlement.

The legal model should require every instruction to be traceable to:

- Principal.
- Mandate.
- Client Funds or Treasury Position.
- Reservation or availability check.
- Expiration, execution, return, or review.

## Pay Code

Pay Code is the working concept for a redemption credential associated with an
existing Settlement Instruction. The model intentionally avoids treating Pay Code
as the center of value.

The architecture must continue testing whether product behavior, transferability,
messaging, reuse, expiry, and user expectations could cause Pay Code to be viewed
as stored value. XLegal does not resolve that question. It makes the question
visible.

## Journal

The Journal is the evidence layer. It should record material legal-architecture
events: mandate creation, instruction creation, reservation, release, execution,
expiration, return, review, and trace updates.

The Journal matters because a future audit should not have to infer intent from
final balances alone. It should be able to inspect the path.

## Traceability

Traceability is the connective tissue between legal reasoning and code. It links
business requirements, legal authorities, regulatory constraints, architectural
invariants, implementation artifacts, and tests.

Traceability should eventually allow a reviewer to move in both directions:

```text
From law or constraint -> to code and test
From code or behavior -> back to legal reason
```

## Regulatory Constraints

Regulatory Constraints are the extracted requirements, concerns, prohibitions, or
interpretive risks that shape architecture. They may come from statutes, circulars,
counsel review, regulator feedback, or internal adverse analysis.

Until verified, constraints should be marked as draft, hypothesis, or pending
review.

## Architectural Invariants

Architectural Invariants are proposed rules the system must preserve if the legal
model is to remain coherent. They are not laws. They are design commitments derived
from legal analysis.

Examples include segregation, attribution, evidence, mandate support, reservation
discipline, and avoidance of hidden stored-value behavior.

Invariants should become testable over time. A principle that never reaches code,
tests, or audit evidence is only a slogan.
