# Legal Theories

This document asks:

```text
If a legal theory is true, what must the architecture do?
```

It does not decide which theory is correct. It exposes the architectural
consequences that would follow if a theory applies.

## Agency Theory

If x-change acts as an agent for principals, the architecture must preserve the
source, scope, and limits of authority.

Architectural consequences:

- Mandates must be identifiable and revocable where required.
- Actions must stay within authorized purpose.
- Principal attribution must survive throughout the lifecycle.
- Records must show that execution followed instruction.
- Product language must avoid implying independent ownership of client funds.

Open questions:

- What facts prove an agency relationship?
- What disclosures are required?
- What activities exceed the scope of agency?

## Treasury Mandate Theory

If Treasury Mandate is the controlling model, the architecture must organize funds
around limited purpose, instruction, reservation, execution, expiration, return, and
evidence.

Architectural consequences:

- Every Treasury Position must trace to a Principal and mandate.
- Every movement must have an instruction or return path.
- Stored-value semantics must be avoided unless intentionally analyzed.
- Mandate scope must be visible to future implementation packages.

Open questions:

- What language makes the mandate effective?
- Which operational controls must enforce mandate limits?

## Custody Theory

If x-change has custody-like obligations, the architecture must treat client funds
as requiring stronger safeguarding, segregation, reconciliation, and insolvency
analysis.

Architectural consequences:

- Client funds must remain segregated from operating funds.
- Reconciliation must be frequent and evidenced.
- Access controls and authorization records become central.
- Insolvency treatment must be analyzed before product reliance.

Open questions:

- Does control over the banking relationship create custody risk?
- What fiduciary or safeguarding duties could arise?

## Escrow Theory

If the arrangement is escrow-like, the architecture must make conditions and release
rules explicit.

Architectural consequences:

- Conditions for execution or release must be recorded.
- Dispute and failed-condition paths must exist.
- The role of any neutral stakeholder or conditional holder must be analyzed.
- Return of unused funds must be reliable and evidenced.

Open questions:

- Are settlement conditions legally equivalent to escrow conditions?
- Who is responsible when conditions are disputed?

## Stored Value / EMI Theory

If the system creates stored value or electronic money, the architecture must be
prepared for a substantially different regulatory model.

Architectural consequences:

- Issuance, float, redemption, safeguarding, disclosure, and reporting obligations
  may become central.
- Pay Code and Treasury Position semantics must be examined for stored-value
  behavior.
- Reusable balances, transferability, and general-purpose use become high-risk
  design facts.

Open questions:

- Which exact product facts trigger stored-value characterization?
- Can architecture prevent general-purpose stored-value behavior?

## OPS Theory

If x-change is an operator of payment system or similar regulated participant, the
architecture must account for operational, governance, registration, and risk
management obligations.

Architectural consequences:

- Participant rules and payment flows may need formal documentation.
- System risk, settlement risk, operational resilience, and reporting may need
  controls.
- Regulatory engagement may become part of the implementation plan.

Open questions:

- Which payment activities fall inside OPS scope?
- Does the system operate infrastructure or merely provide supporting technology?

## Technology Provider Theory

If x-change or a component is only a technology provider, the architecture must keep
that boundary true in facts, contracts, and behavior.

Architectural consequences:

- The system must avoid taking roles that contradict technology-provider status.
- Contracts must assign fund-handling and execution responsibilities clearly.
- Logs should show software support rather than unauthorized fund control.

Open questions:

- Which components can credibly remain technology-only?
- What operational control would defeat this theory?
