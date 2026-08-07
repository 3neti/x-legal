# Legal Grammar

This document is not a glossary. A glossary defines words in isolation. A grammar
defines how concepts may relate to one another.

XLegal needs a grammar because future engineering packages should not invent legal
meaning locally. The ecosystem should share a single vocabulary for Treasury and
Settlement concepts, then trace that vocabulary into implementation.

## Canonical flow

The current working grammar is:

```text
Principal
-> Treasury Mandate
-> Client Funds
-> Treasury Position
-> Lien / Reservation
-> Settlement Instruction
-> Pay Code
-> Execution / Expiration / Return
-> Journal
-> Legal Trace
```

This flow is provisional. It describes the intended architecture under continuing
analysis, not settled law.

## Principal anchors authority

The Principal is the origin point of the grammar. Every fund, instruction, mandate,
reservation, and settlement event should be explainable in relation to a Principal.

Without the Principal, the architecture risks turning client-facing funds into an
anonymous platform abstraction.

## Treasury Mandate constrains purpose

The Treasury Mandate links the Principal to permitted Treasury and Settlement
activity. It should explain what the system may do, what it may not do, and how
authority begins, changes, or ends.

The mandate is the grammar's first discipline: the system should not treat funds as
available simply because they exist.

## Client Funds preserve attribution

Client Funds are funds that remain attributable to a Principal and constrained by
mandate and purpose. They are not operating funds. They should not become generic
platform liquidity in the architecture's language or behavior.

Client Funds must remain capable of being explained in relation to source,
principal, status, and permitted use.

## Treasury Position represents state

A Treasury Position is the system's structured representation of the current
posture of Client Funds. It exists to express state, not to create stored-value
meaning.

A Treasury Position may be available for instruction, reserved, executed, expired,
returned, or under review. Its meaning depends on the mandate and instruction chain
around it.

## Lien and Reservation bind availability

A Reservation is the operational hold against a Treasury Position. A Lien is the
evidence concept that makes the reservation visible, bounded, and reviewable.

The grammar treats reservation as something that must have:

- A Principal.
- A Treasury Position.
- A purpose.
- An amount.
- A Settlement Instruction or pending instruction context.
- A release, execution, expiration, or review path.

## Settlement Instruction directs action

A Settlement Instruction is the specific command-like legal architecture concept
that tells the system what settlement action is intended.

It should not be generic. It should be linked to:

- Principal.
- Mandate.
- Funds or position.
- Amount.
- Purpose.
- Expiry or review condition.
- Execution evidence.

## Pay Code credentials redemption

Pay Code sits after Settlement Instruction in the grammar. It should not become the
center of the value model.

The current architectural intent is that Pay Code identifies or enables redemption
of an existing Settlement Instruction. It should not independently represent stored
monetary value. Whether the facts support that characterization remains a legal and
regulatory question for review.

## Execution, expiration, and return close the loop

Every instruction path should move toward a closing state:

- Execution: the intended settlement action completes.
- Expiration: the instruction becomes stale and must be reviewed or unwound.
- Return: unused or unexecuted funds move back through an approved path.
- Review: facts require human or legal assessment before closure.

The grammar should resist indefinite suspense states.

## Journal preserves evidence

The Journal records the lifecycle. It is where architecture proves that the system
did not merely arrive at a final state, but traveled through permitted states for
documented reasons.

Journal entries should eventually support audit questions such as:

- Who authorized this?
- What instruction existed?
- What funds were reserved?
- What credential was used?
- Why did execution, expiration, return, or review occur?

## Legal Trace connects grammar to authority

Legal Trace links the grammar to authorities, constraints, invariants, decisions,
packages, classes, methods, tests, and audit evidence.

The grammar is only useful if implementation can be mapped back to it.

## Vocabulary rules

- Prefer Treasury and Settlement language over wallet-centered language.
- Prefer mandate, instruction, reservation, execution, expiration, return, and
  journal over generic balance language.
- Do not use a term merely because it is familiar to users or engineers.
- Do not hide unresolved legal questions behind product language.
- Treat each term as a claim about system behavior that must eventually be testable.

## Commercial extension

Commercial activity must remain downstream of explicit authority and separate from
the Settlement Instruction principal:

```text
Principal
-> Treasury Mandate
-> Client Funds
-> Settlement Instruction Principal
-> separately disclosed Instruction Service Charge
-> Commercial Offering
-> Commercial Allocation Policy
-> Provider Cost / Product Revenue / Partner Commission Payable / Commercial Revenue
-> Settlement / Reversal / Review
-> Journal
-> Legal Trace
```

Only the Instruction Service Charge may enter the Commercial Allocation Policy. A
Pay Code value, reserved Client Funds, and provider Inventory are not commercial
allocation bases. Provider Cost Payable and Partner Commission Payable describe
obligations; neither term proves an external payment occurred.
