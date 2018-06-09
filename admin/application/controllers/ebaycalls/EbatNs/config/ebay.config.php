<?php /*

[ebay-config]

; place keys and certificate here as provided from eBay

; this is the tripple for the sandbox
compat-level = 533
dev-key-test = f579acc9-abc6-4e3b-bd27-8f9bd868b664

app-key-test = rockscri-de85-43d0-a7ac-b26221849977

cert-id-test = 48cdea4b-f1d1-4655-b474-2bc16b9f0ef5

; and here for the production environment once you passed certification

dev-key-prod  = f579acc9-abc6-4e3b-bd27-8f9bd868b664

app-key-prod  = rockscri-7a27-4c7a-b095-e8cbe5ebb63b

cert-id-prod =  1a6a02c2-9eba-4725-aafa-f1b2d519b678



; primary site id
AgAAAA**AQAAAA**aAAAAA**L0oZWw**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6AFloCiAJKBpwidj6x9nY+seQ**OAcCAA**AAMAAA**q8h8JxFbPOqmz6ow6J97OlhGCzT0H5JWlM8DXs1tL4S9rQ4d+1z4EDqy1y1P6FOfaIiT1yN8yRab48aaWae9LjgwXqI1b4Lqt7LjdBE4ZUKNsqhjPdx31ETXbTbxXt8zhj5LbgAjtioAGKDpSPpN/Aqx5zngq2jPUffsShJQylW3s0YVmCzTbo2Kzabfir1rs+IvRq6BPsKT9GcCIw5yvwUO4VCOUi3m2Wkz0S7Kr2treWKk2WC0M3zRqLa9A7CMMDlh8XQ6T9u7DFpL6FB0WvpRCtVgayoDbScjZImpGlS+ZxnxOh+3m7JGYz74xE5pP64udbRTEcW/rYUt6QwHOl6H05Kdv56pVYzrjOe7BJamKqJmumIKIRJqgQKJBRWJ0xyH8VfOHDWAZ+mguBetxUhTjAqkJo9jIaZJbHgmt6mpo/kutZg1FAZ57R6MWWqw3odASxEV+bERaP3QCFgF+Ry07fZl3rvtFi5D47dz9cnONWnS7Iunh3n697r+Yb58oPV7ch/8McRpvBSQXOAm/aeFZghU3PLs0aAFl8qwuT5NgoTXypbactAUZgUYNJLDUEB0/fUtFvc9U1fSj48J7Rl349dTX3kxhhB1EF2VXfw6ZPU977UljAua0svkMHEZH8pwTX6OGGVV6mnh7+ZwfPRfQWhdaw1ETGssHaeSlAMDUAVfRv9wtEIu0lZZ/QRy4uGt7eRo43eo8YkMRzBABbd06+6JT8PsUqZADk3915IFpJ+bz90q83OmeObRugxN
site-id = 3



; 1 => sandbox, 0 => production

app-mode = 0

;app-mode = 1


[ebay-transaction-config]

use-http-compression=0
[token]
; put in here the full absolute path to your config file !
;local
;token-pickup-file=/opt/lampp/htdocs/template-manager-on-eBay/admin/application/controllers/ebaycalls/EbatNs/config//my.token
;server
token-pickup-file=/opt/lampp/htdocs/template-manager-on-eBay/admin/application/controllers/ebaycalls/EbatNs/config//my.token
token-mode=1
*/ ?>