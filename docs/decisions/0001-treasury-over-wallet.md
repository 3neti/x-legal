# 0001: Treasury Terminology Over Wallet Terminology

## Status

Proposed

## Context

Early product and engineering systems often reach for wallet terminology because it
is familiar. Users understand it. Engineers understand it. Many payment-adjacent
systems use it as a convenient shorthand for value, balance, funding, spending, and
redemption.

For x-change, that convenience creates risk. Wallet-centered vocabulary may imply
that the system stores monetary value for general-purpose use, maintains a user
balance with independent value, or performs a role that should be analyzed under
electronic money, payment system, custody, escrow, or similar regulatory concepts.

XLegal does not conclude that wallet terminology creates any specific legal result.
It does conclude that terminology is architecturally significant enough to require a
deliberate decision.

The emerging model is centered on:

- Principal.
- Treasury Mandate.
- Client Funds.
- Treasury Position.
- Lien / Reservation.
- Settlement Instruction.
- Pay Code as credential.
- Execution, expiration, return, and journal.

This model better forces the ecosystem to ask who authorized the activity, what the
funds are for, what instruction exists, what is reserved, what closes the lifecycle,
and what evidence proves the path.

## Decision

XLegal will prefer Treasury and Settlement terminology over wallet-centered
terminology for the legal architecture of the ecosystem.

The package will treat "wallet" language as disfavored unless a future decision
record expressly permits it for a narrow context. Product, engineering, and legal
documents should instead use terms that preserve mandate, instruction, reservation,
execution, return, and traceability semantics.

This decision is proposed, not immutable. It should be reviewed by humans and
external counsel before being treated as an accepted ecosystem position.

## Consequences

The architecture should become more precise. Contributors will be pushed to explain
whether a feature concerns funds, positions, reservations, instructions,
credentials, execution, or evidence rather than hiding those distinctions behind a
single user-facing container metaphor.

Engineering packages may need to rename concepts, classes, methods, events,
database columns, tests, and user-facing language if they currently rely on wallet
semantics.

Traceability should improve because Treasury terminology maps more naturally to
mandates, constraints, invariants, and audit evidence.

The ecosystem may lose some product-language familiarity. That is acceptable at the
architecture layer. Product language can be reviewed separately, but it should not
override the legal grammar.

## Product-Surface Application

Account-facing product surfaces should use **Account**, **Client Funds**,
**Account Funding**, **Treasury Position**, and **Issuance Capacity**. They should
not label the user's position as a wallet or describe an increase as a wallet
top-up.

Funding-method labels may describe the rail or controlled process without implying
a new stored-value product. The current approved method vocabulary is **QR Ph**,
**Bank Transfer**, **Pay Code**, and **Reviewed Value**. A consolidated
**Funding Activity** history may show requests, provider observations, and
recognized funds, provided it keeps those states distinct and does not present
provider evidence as an Account credit before recognition.

This vocabulary does not change the legal characterization of the underlying
activity. It is a disciplined product-language application of the Treasury model
and remains subject to the human and external-counsel review stated above.

This decision does not establish that the system is not EMI, not OPS, not custody,
not escrow, or outside any regulatory category. It only establishes the current
architectural vocabulary direction for analysis.
