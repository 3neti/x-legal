# Legal Architecture (Working Draft)

## Scope

These concepts are working models for traceability and are **not** final legal
conclusions.

## Core legal-architecture elements

- Treasury Mandate  
  Instruction from principal to hold and process funds only for stated purposes.

- Treasury and Settlement Agent  
  Actor that receives and executes settlement actions based on valid mandates and
  instructions.

- Client Funds  
  Funds attributable to specific principals and subject to settlement purpose and mandate.

- Treasury Position  
  Accounting representation of client-funds exposure and operational posture.

- Lien  
  Reservation evidence tied to an instruction before execution.

- Settlement Instruction  
  The concrete settlement action request tied to a principal and purpose.

- Pay Code  
  A redemption credential linked to an existing settlement instruction.

- Journal  
  Immutable evidence log of movements, instructions, reservations, and state changes.

- Regulatory Traceability  
  Explicit link between legal/regulatory sources and architectural design choices.

## Notes

- The package intentionally avoids implementation behavior.
- Relationships between these terms should be revised during legal review before any
  architecture hardening.
- The model should be updated when factual patterns change.
