SHELL := /bin/bash
all: trm.cin trm.lime trm.ibus trm.scim
clean:
	rm trm.*
trm.%: src/%.php
	php -f $< > $@

.PHONY: all clean

