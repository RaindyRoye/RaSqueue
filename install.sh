#!/bin/sh
rm -rf *.o *.a RaSqueue
cp -rf Makefile.lua Makefile
make posix
cp -rf Makefile.squ Makefile
make
### test
