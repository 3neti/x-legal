# 0003: Trace Commercial Waterfalls And Partner Commissions

## Status

Proposed

## Context

An Instruction Service Charge may support provider costs, product revenue, partner
participation, and an operating residual. A calculation alone cannot establish that
a participant is legally entitled to an amount or that an external payment occurred.

## Decision

Every Commercial Waterfall must be immutable when published, conserve its allocation
base exactly, identify classified destinations, and carry an effective legal-policy
trace. A Partner Commission allocation requires an eligible named participant, an
attribution basis, and a contractual or authorization reference.

Commission allocation creates a Partner Commission Payable. Discharge requires a
maker request, independent approval, external settlement evidence, and an append-only
Journal lifecycle. When no eligible partner exists, the policy must explicitly skip
the commission or route the amount through a declared residual rule; it must not
create an anonymous payable.

## Consequences

Commercial Offering publication, sale acceptance, commission accrual, payout,
reversal, and provider-cost settlement become legally traced operations. Product UI
must not imply that an accrual is a completed payment.
