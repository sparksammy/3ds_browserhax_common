<?php

$CODEBLK_ENDADR = ((0x00100000 + 0x0026F000 + 0x00064000 + 0x00018000 + 0x00056868) + 0xfff) & ~0xfff;
$OSSCRO_HEAPADR = 0x083a5000;
$WEBKITCRO_HEAPADR = 0x085a6000;
$APPHEAP_PHYSADDR = 0x25000000;
init_mapaddrs_cro();

$STACKPIVOT_ADR = 0x00130aa4;
$COND_THROWFATALERR = 0x0019fcd0;

$ROP_POP_R0R6PC = 0x00105128;
$ROP_POP_R0R8PC = 0x00131710;
$ROP_POP_R0PC = 0x0010c368;
$ROP_POP_R1R5PC = 0x00101e8c;

$ROP_STR_R1TOR0 = 0x001040bc;
$ROP_LDR_R0FROMR0 = 0x001116d4;
$ROP_ADDR0_TO_R1 = 0x0012bd20;

$ROP_WRITETHREADSTORAGEPTR_TOR4R5 = 0x00169590;

$srv_GetServiceHandle = 0x0023b6bc;

$svcGetProcessId = 0x00100ca4;
$svcSendSyncRequest = 0x00243654;
$svcControlMemory = 0x00144648;
$svcSleepThread = 0x001041f4;

$GXLOW_CMD4 = 0x0011dd68;
$GSPGPU_SERVHANDLEADR = 0x003dc70c;

$FS_MOUNTSDMC = 0x0019d58c;

$IFile_Open = 0x0022ed58;
$IFile_GetSize = 0x00205e1c;
$IFile_Seek = 0x001526c0;
$IFile_Read = 0x00169424;

$FS_DELETEFILE = 0x00169108;

$FSFILEIPC_CLOSE = 0x0027ff1c;
$FSFILEIPC_READ = 0x0027fec4;
$FSFILEIPC_GETSIZE = 0x0027ffa8;

$POPPC = 0x001057c0;

$ROP_STR_R0TOR1 = $WEBKITCRO_MAPADR+0x0002ffb0;

$WKC_FOPEN = $OSSCRO_MAPADR+0x5d8-0x4;
$WKC_FCLOSE = $OSSCRO_MAPADR+0x5d0-0x4;
$WKC_FREAD = $OSSCRO_MAPADR+0x5e0-0x4;
$WKC_FWRITE = $OSSCRO_MAPADR+0x5e8-0x4;
$WKC_FSEEK = $OSSCRO_MAPADR+0x5f8-0x4;

$ROP_curl_easy_cleanup = $WEBKITCRO_MAPADR+0xe9c-0x4;
$ROP_curl_easy_init = $WEBKITCRO_MAPADR+0xea4-0x4;
$ROP_curl_easy_perform = $WEBKITCRO_MAPADR+0xecc-0x4;
$ROP_curl_easy_setopt = $WEBKITCRO_MAPADR+0xa2c-0x4;

$ROP_MEMCPY = $WEBKITCRO_MAPADR+0x194-0x4;
$ROP_MEMSETOTHER = $WEBKITCRO_MAPADR+0x30c-0x4;

$ROP_snprintf = $OSSCRO_MAPADR+0x3c0-0x4;

$GSP_FLUSHDCACHE = 0x00192044;
$GSP_WRITEHWREGS = 0x0011e170;

$IFile_Close = 0x001fc438;
$IFile_Write = 0x001694ac;

$OPENFILEDIRECTLY_WRAP = 0x0027c8bc;

$THROW_FATALERR = 0x00152c80;

$ROP_POP_R0IPPC = 0x0018d6e0;

$ROP_LDR_R0_FROMR0_SHIFTR1 = 0x00101214;

$ROP_LDMSTM_R5R4_R0R3 = 0x001d212c;

$ROP_STMR0_R0PC = 0x001bc170;

$ROP_LDRR0R4_LDRR0_R0OFF4_LDRR0_R0OFF34_OBJVTABLECALL_5C_POPR4LR = $WEBKITCRO_MAPADR+0x00374118;

?>
