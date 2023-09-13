// SPDX-License-Identifier: MIT 
pragma solidity ^0.8.0; 
 
contract ShipmentContract { 
    // Structure for a shipment 
    struct Shipment { 
        uint shipmentID; 
        uint weight; 
        uint volume; 
        string destination; 
        string status; 
    } 
 
    // Array to store shipments 
    Shipment[] public shipments; 
 
    // Function to register a new shipment 
    function registerShipment(uint _shipmentID, uint _weight, uint _volume, string memory _destination) public { 
        shipments.push(Shipment(_shipmentID, _weight, _volume, _destination, "Pending")); 
    } 
 
    // Function to modify shipment details 
    function modifyShipment(uint _shipmentID, uint _newWeight, uint _newVolume, string memory _newDestination) public { 
        for (uint i = 0; i < shipments.length; i++) { 
            if (shipments[i].shipmentID == _shipmentID) { 
                shipments[i].weight = _newWeight; 
                shipments[i].volume = _newVolume; 
                shipments[i].destination = _newDestination; 
                break; 
            } 
        } 
    } 
 
    // Function to update shipment status 
    function updateShipmentStatus(uint _shipmentID, string memory _newStatus) public { 
        for (uint i = 0; i < shipments.length; i++) { 
            if (shipments[i].shipmentID == _shipmentID) { 
                shipments[i].status = _newStatus; 
                break; 
            } 
        } 
    } 
 
    // Function to get shipment details by ID 
    function getShipmentDetails(uint _shipmentID) public view returns (uint, uint, uint, string memory, string memory) { 
        for (uint i = 0; i < shipments.length; i++) { 
            if (shipments[i].shipmentID == _shipmentID) { 
                return (shipments[i].shipmentID, shipments[i].weight, shipments[i].volume, shipments[i].destination, shipments[i].status); 
            } 
        } 
        revert("Shipment not found"); 
    } 
}